<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
{
$s=$obj->admincompanyview();
$smartyObj->assign("view",$s);



// $key=$_GET['key'];
// if(isset($_POST['hide'])AND($_POST['hide'])=='h')
// {
// if(isset($_POST['reply'])AND($_POST['reply'])!=null)
// {
// 	$reply=trim($_POST['reply']);
// 	$obj->complaintreply($key,$reply);
// }
// else
// {
// 	echo"<script>alert('Reply is empty')</script>";
// }









$smartyObj->display('admincompanyview.tpl');
}
else
{	
	Header("location:login.php");
}
?>