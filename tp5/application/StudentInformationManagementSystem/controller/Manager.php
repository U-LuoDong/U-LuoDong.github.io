<?php
namespace app\StudentInformationManagementSystem\controller;
use think\Controller;
use think\Request;//变量获取
use app\StudentInformationManagementSystem\model\Manager as ManagerModer;//模型类
class manager extends Controller
{
	//注册页面开始
    public function register()
    {
    	if(request()->isPost()){//如果没有提交表单就跳转到登录页面 否则进行登录的验证
	    	$data=input('post.');
            $validate = \think\Loader::validate('Manager');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
	    	require '/StudentInformationManagementSystem/denfence.php';//引入安全保护类
			//	安全防护开始
			$managerData=array();
			$managerData['tel'] = clean_xss(input('post.uPhone_Number')); //1.防注入代码   
			$managerData['pas'] = clean_xss(md5(input('post.uPassword')));
//			echo $pas;
//			die;
		//	$pas = clean_xss(input('post.pas'));
			//	安全防护结束
		   	$Manager=new ManagerModer();
//		   	dump($Manager->addManager($managerData));
//			die;
		   	if($Manager->addManager($managerData)){
			   	$this->success("新增成功",'Index/sign');  
            }else{
			   	$this->error("新增失败","Index/register");
            }
		   	return ;
    	}
    	return	$this->fetch();
    }
    
    
	//注册页面结束
	
   //修改管理员信息开始
    public function modifyPas($tel)
    {
    	if(!session('tel')){
			$this->error('请先登录系统!','Index/sign');
		}
		if(request()->isPost()){//如果没有提交表单就跳转到修改密码页面 
    	$data=input('post.');
        $validate = \think\Loader::validate('Manager');
        if(!$validate->scene('edit')->check($data)){
            $this->error($validate->getError());
        }        
    	require '/StudentInformationManagementSystem/denfence.php';//引入安全保护类
		//	安全防护开始
		$managerData=array();
		$managerData['tel'] = clean_xss(input('post.tel')); //1.防注入代码   
		$managerData['OldPas'] = clean_xss(md5(input('post.OldPas')));
		$managerData['NewPas'] = clean_xss(md5(input('post.NewPas')));
		//	安全防护结束
		$Manager=new ManagerModer();
		$result=$Manager->modifyManager($managerData);
       		if($result==1){
	   			$this->error("管理员账号不存在，请重新输入...");
       		}else if($result==2){
	   			$this->error("旧密码错误，即将跳转到修改密码界面...");
       		}else{
         		session(null);
	   			$this->success("恭喜您修改密码成功!请重新登录...",'Index/sign'); 
       		}
		   	return ;   	
		
//		$result = ManagerModer::all();
//		foreach($result as $row){
//			if($row['uPhone_Number']==$tel){
//	//			echo($row['uPassword']."   ".md5($OldPas)."<br/>");//前面验证安全的时候已经加密了 这里不用再加密了
//				if($row['uPassword']==md5($OldPas)){
//					//修改密码
//					$user	=new ManagerModer(); //	save方法第二个参数为更新条件
//		   			$user->save(['uPassword'=>md5($NewPas)],['uPhone_Number'=>$tel]);
//		   			session_start();
//					//删除在数组和服务器端的session数据
//					$_SESSION = [];
//					session_destroy();
//	   				$this->success("恭喜您修改密码成功!请重新登录...",'Index/sign');  
//				}else{
//	   				$this->error("旧密码错误，即将跳转到修改密码界面...","ModifyPas");
//				}
//			}
//		}
    	return ;
    	}
//  	$this->assign('name',session('tel'));
    	$this->assign('name',$tel);
    	return	$this->fetch();
    }
   //修改管理员信息结束
   
   }
?>