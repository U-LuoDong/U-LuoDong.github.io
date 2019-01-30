<?php
session_start();
echo json_encode($_SESSION['RandCode'],JSON_UNESCAPED_UNICODE);//中文不转为unicode
?>