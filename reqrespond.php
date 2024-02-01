<?php
include_once"settings/settings.php"; 
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
{ 
// $key=$_COOKIE['lkey'];
$key=$_GET['key'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['amount'])AND($_POST['amount'])!=null)
{
	$amount=trim($_POST['amount']);
	$obj->reqrespond($key,$amount,$_FILES['quote']);
}

else
	echo"<script>alert('Amount is empty')</script>";
}
$smartyObj->display("companysubheader.tpl");
$smartyObj->display("reqrespond.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>
