<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
{
$key=$_GET['key'];
$s=$obj->mysuggestion_select($key);
$smartyObj->assign("viewsug",$s);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	
		if(isset($_POST['suggestion'])AND($_POST['suggestion'])!=null)
		{
					$suggestion=trim($_POST['suggestion']);		
					$obj->editmysuggestion($suggestion,$key);
		}
	    else
		echo"<script> alert('Suggestion is empty')</script>";
}
$smartyObj->display('customersubheader.tpl');
$smartyObj->display('editmysuggestion.tpl');
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>
			
		