<?php
include_once"settings/settings.php"; 
include_once"classes/userclass.php";
$obj=new userclass(); 
// $key=$_COOKIE['lkey'];
$key=$_GET['key'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['reply'])AND($_POST['reply'])!=null)
{
	$reply=trim($_POST['reply']);
	$obj->complaintreply($key,$reply);
}
else
{
	echo"<script>alert('Reply is empty')</script>";
}
}
$smartyObj->display("admincomplaintreply.tpl");
?>
