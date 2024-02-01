<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
// echo "hio";exit;
if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
{

$s=$obj->admincomplaintview();
$smartyObj->assign("view",$s);
$smartyObj->display('admincomplaintview.tpl');
}
else
{	
	Header("location:login.php");
}
?>