<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_GET['key'];
session_start();
if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
{
$obj->rejectcompany($key);
}
else
{	
	Header("location:login.php");
}
?>