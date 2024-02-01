<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
{
$s=$obj->admincustomerview();
$smartyObj->assign("view",$s);
$smartyObj->display('admincustomerview.tpl');
}
else
{	
	Header("location:login.php");
}
?>