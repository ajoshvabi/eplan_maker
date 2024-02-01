<?php
include_once"settings/settings.php"; 
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
{
//$key=$_COOKIE['lkey'];
$key1=$_GET['key'];
$s=$obj->selectrequirements($key1);
$smartyObj->assign("req",$s);

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['buildingtype'])AND($_POST['buildingtype'])!=null)
{
	if(isset($_POST['model'])AND($_POST['model'])!=null)
{
	if(isset($_POST['noofrooms'])AND($_POST['noofrooms'])!=null)
{
	if(isset($_POST['otherrequirements'])AND($_POST['otherrequirements'])!=null)
{
	$buildingtype=trim($_POST['buildingtype']);
	$model=trim($_POST['model']);
	$noofrooms=trim($_POST['noofrooms']);
	$otherrequirements=trim($_POST['otherrequirements']);
	$obj->editrequirement($buildingtype,$model,$noofrooms,$otherrequirements,$key1);
	}
else
   echo "<script>alert('Other requirements is empty')</script>";
}
else
   echo "<script>alert('No of rooms is empty')</script>";
}
else
   echo "<script>alert('Model is empty')</script>";
}
else
   echo "<script>alert('Building type is empty')</script>";
}
$smartyObj->display('customersubheader.tpl');
$smartyObj->display('editreq.tpl');
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}

?>