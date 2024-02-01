<?php
include_once"settings/settings.php"; 
include_once"classes/userclass.php";
$obj=new userclass(); 
// $key=$_COOKIE['lkey'];
$key=$_GET['key'];
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	$obj->adddesign($key,$_FILES['design']);
}


$smartyObj->display("companysubheader.tpl");
$smartyObj->display("adddesign.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>
