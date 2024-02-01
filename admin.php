<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$c=$obj->countcompany();
$smartyObj->assign("countcom",$c);
$cu=$obj->countcustomer();
$smartyObj->assign("countcus",$cu);
$coc=$obj->countcomplaints();
//echo $coc;exit;
$smartyObj->assign("countcomp",$coc);



$smartyObj->display('admin.tpl');
}
else
{	
	Header("location:login.php");
}
?>