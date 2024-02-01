<?php
include_once"settings/settings.php"; 
include_once"classes/userclass.php";
$obj=new userclass(); 
session_start();
if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
{
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['search'])AND($_POST['search'])!=null)
{
	$companyname=trim($_POST['search']);
	$a=$obj->searchcompany($companyname);
	$smartyObj->assign("data",$a);
}
else
   echo "<script>alert('Search is empty')</script>";
}
$smartyObj->display("customersubheader.tpl");
$smartyObj->display("search.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>