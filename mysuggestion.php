<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
{
$key=$_GET['key'];
$s=$obj->mysuggestion($key);
$smartyObj->assign("viewsug",$s);
$smartyObj->display('customersubheader.tpl');
$smartyObj->display('mysuggestion.tpl');
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}

?>