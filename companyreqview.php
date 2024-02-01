<?php
include_once"settings/settings.php"; 
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
{
$key=$_COOKIE['lkey'];
// $key1=$_GET['key'];
$s=$obj->companyreqview($key);
$smartyObj->assign("view",$s);
$j=$obj->count_message_company($key);
$smartyObj->assign("mesg",$j);
$smartyObj->display('companysubheader.tpl');
$smartyObj->display('companyreqview.tpl');
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}


?>