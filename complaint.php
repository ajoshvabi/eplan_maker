<?php
include_once"settings/settings.php"; 
include_once"classes/userclass.php";
$obj=new userclass(); 
session_start();
if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
{
$key=$_COOKIE['lkey'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['complaint'])AND($_POST['complaint'])!=null)
{
	$complaint=trim($_POST['complaint']);
	$obj->complaint($key,$complaint);
}
else
{
	echo"<script>alert('Complaint is empty')</script>";
}
}
$smartyObj->display('customersubheader.tpl');
$smartyObj->display("complaint.tpl");
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>
