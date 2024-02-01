<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
{
$key=$_COOKIE['lkey'];
// session_start();
// if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
// {
$s=$obj->viewreq($key);
$smartyObj->assign("view",$s);
$k=$obj->count_message($key);
$smartyObj->assign("msg",$k);
$smartyObj->display('customersubheader.tpl');
$smartyObj->display('viewreq.tpl');
 $smartyObj->display('footer.tpl');
 }
else
{
    header("location:login.php");
}

?>