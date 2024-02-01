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
	if(isset($_POST['suggestion'])AND($_POST['suggestion'])!= null)
	{
		$suggestion=trim($_POST['suggestion']);
        $obj->addsuggestion($key,$suggestion);
    }
    else
    	echo"<script>alert('suggestion is empty')</script>";
}

$smartyObj->display("customersubheader.tpl");
$smartyObj->display("addsuggestion.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>
