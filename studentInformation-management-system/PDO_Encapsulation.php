<?php
	
	
//事务模式
//try{
//
//$m->beginTransaction();//开启事务处理
//
////PDO预处理以及执行语句...
//
//$m->commit();//提交事务
//
//}catch(PDOException $e){
//
//$m->rollBack();//事务回滚
////相关错误处理
//}



/**
* DAOPDO PDO封装
* 引入了单例模式（通过单例模式可以保证系统中，应用该模式的类一个类只有一个实例。即一个类只有一个对象实例。）来保证在全局调用中不会重复实例化这个类，增加了预处理和事务处理模块, 降低系统资源的浪费
*单例模式：一是单例模式的类只提供私有的构造函数，
		二是类定义中含有一个该类的静态私有对象，
		三是该类提供了一个静态的公有的函数用于创建或获取它本身的静态私有对象。
		四是还要有一个private的clone方法，防止克隆；
* @version >5.1 utf8
*/
class DAOPDO
{
    protected static $_instance = null;
    protected $dbName = '';
    protected $dsn;
    protected $dbh;
    /**
     * //私有构造函数
     * 
     * @return DAOPDO
     */
    private function __construct($dbHost, $dbUser, $dbPasswd, $dbName, $dbCharset)
    {
        try {
            $this->dsn = 'mysql:host='.$dbHost.';dbname='.$dbName;
            $this->dbh = new PDO($this->dsn, $dbUser, $dbPasswd);
            $this->dbh->exec('SET character_set_connection='.$dbCharset.', character_set_results='.$dbCharset.', character_set_client=binary');
        } catch (PDOException $e) {
            $this->outputError($e->getMessage());
        }
    }
    
    /**
     * 防止克隆 这里__clone方法已经定义过  所以会优先调用这里的方法  进而防止了对 对象的克隆
     * 
     */
    private function __clone() {}
    
    //创建静态私有的变量保存该类对象（该类的静态私有对象）
     private static $instance;
    /**
     * Singleton instance     
     * 一个静态的公有的函数用于创建或获取它本身的静态私有对象
     * 
     * @return Object
     */
    public static function getInstance($dbHost, $dbUser, $dbPasswd, $dbName, $dbCharset)
    {
    	//判断$instance是否是DAOPDO的对象      没有则创建
        if (self::$_instance === null) {
            self::$_instance = new self($dbHost, $dbUser, $dbPasswd, $dbName, $dbCharset);
        }
        return self::$_instance;
    }
    
    /**
     * Query 查询
     *
     * @param String $strSql SQL语句
     * @param String $queryMode 查询方式(All or Row)
     * @param Boolean $debug
     * @return Array
     */
    public function query($strSql, $queryMode = 'All', $debug = false)
    {
        if ($debug === true) $this->debug($strSql);
        $recordset = $this->dbh->query($strSql);
        $this->getPDOError();
        if ($recordset) {
            $recordset->setFetchMode(PDO::FETCH_ASSOC);//关联数组形式。  
//还可以用$this->dbh->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);	PDO::ATTR_CASE(使用关联索引获取数据)   PDO::CASE_UPPER是设置关联索引为大写
            if ($queryMode == 'All') {
                $result = $recordset->fetchAll();
            } elseif ($queryMode == 'Row') {
                $result = $recordset->fetch();
            }
        } else {
            $result = null;
        }
        return $result;
    }
    
    /**
     * Update 更新
     *
     * @param String $table 表名
     * @param Array $arrayDataValue 字段与值
     * @param String $where 条件
     * @param Boolean $debug
     * @return Int
     */
    public function update($table, $arrayDataValue, $where = '', $debug = false)
    {
        $this->checkFields($table, $arrayDataValue);
        if ($where) {
            $strSql = '';
            foreach ($arrayDataValue as $key => $value) {
                $strSql .= ", `$key`='$value'";
            }
            $strSql = substr($strSql, 1);
            $strSql = "UPDATE `$table` SET $strSql WHERE $where";
        } else {
            $strSql = "REPLACE INTO `$table` (`".implode('`,`', array_keys($arrayDataValue))."`) VALUES ('".implode("','", $arrayDataValue)."')";
        }
        if ($debug === true) $this->debug($strSql);
        $result = $this->dbh->exec($strSql);
        $this->getPDOError();
        return $result;
    }
    
    /**
     * Insert 插入
     *
     * @param String $table 表名
     * @param Array $arrayDataValue 字段与值
     * @param Boolean $debug
     * @return Int
     */
    public function insert($table, $arrayDataValue, $debug = false)
    {
        $this->checkFields($table, $arrayDataValue);
        $strSql = "INSERT INTO `$table` (`".implode('`,`', array_keys($arrayDataValue))."`) VALUES ('".implode("','", $arrayDataValue)."')";
        if ($debug === true) $this->debug($strSql);
        $result = $this->dbh->exec($strSql);
        $this->getPDOError();
        return $result;
    }
    
    /**
     * Replace 覆盖方式插入
     *
     * @param String $table 表名
     * @param Array $arrayDataValue 字段与值
     * @param Boolean $debug
     * @return Int
     */
    public function replace($table, $arrayDataValue, $debug = false)
    {
        $this->checkFields($table, $arrayDataValue);
        $strSql = "REPLACE INTO `$table`(`".implode('`,`', array_keys($arrayDataValue))."`) VALUES ('".implode("','", $arrayDataValue)."')";
        if ($debug === true) $this->debug($strSql);
        $result = $this->dbh->exec($strSql);
        $this->getPDOError();
        return $result;
    }
    
    /**
     * Delete 删除
     *
     * @param String $table 表名
     * @param String $where 条件
     * @param Boolean $debug
     * @return Int
     */
    public function delete($table, $where = '', $debug = false)
    {
        if ($where == '') {
            $this->outputError("'WHERE' is Null");
        } else {
            $strSql = "DELETE FROM `$table` WHERE $where";
            if ($debug === true) $this->debug($strSql);
            $result = $this->dbh->exec($strSql);
            $this->getPDOError();
            return $result;
        }
    }
    
    /**
     * execSql 执行SQL语句,debug=>true可打印sql调试
     *
     * @param String $strSql
     * @param Boolean $debug
     * @return Int
     */
    public function execSql($strSql, $debug = false)
    {
        if ($debug === true) $this->debug($strSql);
        $result = $this->dbh->exec($strSql);
        $this->getPDOError();
        return $result;
    }
    
    /**
     * 获取字段最大值
     * 
     * @param string $table 表名
     * @param string $field_name 字段名
     * @param string $where 条件
     */
    public function getMaxValue($table, $field_name, $where = '', $debug = false)
    {
        $strSql = "SELECT MAX(".$field_name.") AS MAX_VALUE FROM $table";
        if ($where != '') $strSql .= " WHERE $where";
        if ($debug === true) $this->debug($strSql);
        $arrTemp = $this->query($strSql, 'Row');
        $maxValue = $arrTemp["MAX_VALUE"];
        if ($maxValue == "" || $maxValue == null) {
            $maxValue = 0;
        }
        return $maxValue;
    }
    
    /**
     * 获取指定列的数量
     * 
     * @param string $table
     * @param string $field_name
     * @param string $where
     * @param bool $debug
     * @return int
     */
    public function getCount($table, $field_name, $where = '', $debug = false)
    {
        $strSql = "SELECT COUNT($field_name) AS NUM FROM $table";
        if ($where != '') $strSql .= " WHERE $where";
        if ($debug === true) $this->debug($strSql);
        $arrTemp = $this->query($strSql, 'Row');
        return $arrTemp['NUM'];
    }
    
    /**
     * 获取表引擎
     * 
     * @param String $dbName 库名
     * @param String $tableName 表名
     * @param Boolean $debug
     * @return String
     */
    public function getTableEngine($dbName, $tableName)
    {
        $strSql = "SHOW TABLE STATUS FROM $dbName WHERE Name='".$tableName."'";
        $arrayTableInfo = $this->query($strSql);
        $this->getPDOError();
        return $arrayTableInfo[0]['Engine'];
    }
    //预处理执行
    public function prepareSql($sql=''){
        return $this->dbh->prepare($sql);
    }
    //执行预处理
    public function execute($presql){
    	return $presql->execute();//execute只是返回执行结果成功或失败
    }
    //预处理查询
    public function preparExecute($presql, $queryMode = 'All', $debug = false){
    	if ($debug === true) $this->debug($strSql);
		$presql->execute();
		$this->getPDOError();
        if ($presql->execute()) {
            $presql->setFetchMode(PDO::FETCH_ASSOC);//关联数组形式。  
            if ($queryMode == 'All') {
                $result = $presql->fetchAll();
            } elseif ($queryMode == 'Row') {
                $result = $presql->fetch();
            }
        } else {
            $result = null;
        }
        return $result;
    }
    //预处理插入、删除
    public function preparInsert($presql, $type,$data,$queryMode = 'All', $debug = false){
    	if ($debug === true) $this->debug($strSql);
    	if ($type==1){
//  		print_r($data);
//			echo($presql->execute($data)."<br/>");
      		if($presql->execute($data)){
      			$res = $presql->rowCount();//使用一个rowCount（）函数统计被影响的行数$res，然后根据$res是否>0做判断
      			if($res>0){
      				return 1;
      			}else{
      				return 0;
      			}
			}else{
				return 0;//插入同一学号的学生时会出现【主码约束】
//				die('sql语句错误!<br/>') ;
//				throw new PDOException;//主动抛出异常
			}
    	}
    	//多条数据 还没处理
    	if ($type==2){
      		if($presql->execute(array('999'))){
			    echo '添加成功';
			}else{
				echo '添加失败';
			}
    	}
    }
 
/**
 * pdo属性设置
 */
    public function setAttribute($p,$d){
        $this->dbh->setAttribute($p,$d);
    }
 
    /**
     * beginTransaction 事务开始
     */
    public function beginTransaction()
    {
        $this->dbh->beginTransaction();//调用PDO的beginTransaction
    }
    
    /**
     * commit 事务提交
     */
    public function commit()
    {
        $this->dbh->commit();
    }
    
    /**
     * rollback 事务回滚
     */
    public function rollback()
    {
        $this->dbh->rollback();
    }
    
    /**
     * transaction 通过事务处理多条SQL语句
     * 调用前需通过getTableEngine判断表引擎是否支持事务
     *
     * @param array $arraySql 这是一个sql的数组
     * @return Boolean
     */
    public function execTransaction($arraySql)
    {
        $retval = 1;
        $this->beginTransaction();
        foreach ($arraySql as $strSql) {
            if ($this->execSql($strSql) == 0) $retval = 0;//依此执行数组中的每一条sql语句
        }
        if ($retval == 0) {
            $this->rollback();//如果有一条sql语句没有执行成功  那么将会是事务回滚
            return false;
        } else {
            $this->commit();
            return true;
        }
    }
 
    /**
     * checkFields 检查指定字段是否在指定数据表中存在
     *
     * @param String $table
     * @param array $arrayField
     */
    private function checkFields($table, $arrayFields)
    {
        $fields = $this->getFields($table);
        foreach ($arrayFields as $key => $value) {
            if (!in_array($key, $fields)) {
                $this->outputError("Unknown column `$key` in field list.");
            }
        }
    }
    
    /**
     * getFields 获取指定数据表中的全部字段名
     *
     * @param String $table 表名
     * @return array
     */
    private function getFields($table)
    {
        $fields = array();
        $recordset = $this->dbh->query("SHOW COLUMNS FROM $table");
        $this->getPDOError();
        $recordset->setFetchMode(PDO::FETCH_ASSOC);
        $result = $recordset->fetchAll();
        foreach ($result as $rows) {
            $fields[] = $rows['Field'];
        }
        return $fields;
    }
    
    /**
     * getPDOError 捕获PDO错误信息
     */
    private function getPDOError()
    {
        if ($this->dbh->errorCode() != '00000') {
            $arrayError = $this->dbh->errorInfo();
            $this->outputError($arrayError[2]);
        }
    }
    
    /**
     * debug
     * 
     * @param mixed $debuginfo  程序调试 可打印sql调试
     */
    private function debug($debuginfo)
    {
        var_dump($debuginfo);
        exit();
    }
    
    /**
     * 输出错误信息
     * 
     * @param String $strErrMsg
     */
    private function outputError($strErrMsg)
    {
        throw new Exception('MySQL Error: '.$strErrMsg);
    }
    
    /**
     * destruct 关闭数据库连接
     */
    public function destruct()
    {
        $this->dbh = null;
    }
   /**
    *PDO执行sql语句,返回改变的条数
    *如需调试可选用execSql($sql,true)
    */
    public function exec($sql=''){
        return $this->dbh->exec($sql);
    }
}
?>

