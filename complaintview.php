<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
{
$key=$_COOKIE['lkey'];
$s=$obj->complaintview($key);
$smartyObj->assign("view",$s);
$smartyObj->display('customersubheader.tpl');
$smartyObj->display('complaintview.tpl');
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}

?>