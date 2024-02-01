<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
{
$key=$_GET['key'];
$s=$obj-> selectcomplaint($key);
$smartyObj->assign("data",$s);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	
		if(isset($_POST['complaint'])AND($_POST['complaint'])!=null)
		{
			
					$complaint=trim($_POST['complaint']);		
					
					$obj->editcomplaint($complaint,$key);
					
	}
	else
		echo"<script> alert('complaint is empty')</script>";
}
$smartyObj->display('customersubheader.tpl');
$smartyObj->display('complaintedit.tpl');
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>
			
		