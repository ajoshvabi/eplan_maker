<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
{
$key=$_GET['key'];
$cid=$_GET['cid'];
$amount=$_GET['tamount'];

$key1=$_COOKIE['lkey'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['nameoncard'])AND($_POST['nameoncard'])!=null) 
{
	if(isset($_POST['cardno'])AND($_POST['cardno'])!=null) 
{
	if(isset($_POST['month'])AND($_POST['month'])!=null) 
{
if(isset($_POST['year'])AND($_POST['year'])!=null) 
{
	if(isset($_POST['cvvno'])AND($_POST['cvvno'])!=null) 
{
	
	$nameoncard=trim($_POST['nameoncard']);
	$cardno=trim($_POST['cardno']);
	$month=trim($_POST['month']);
	$year=trim($_POST['year']);
	$cvvno=trim($_POST['cvvno']);
	$obj->fpayment($key,$key1,$nameoncard,$cardno,$month,$year,$cvvno,$amount,$cid);
}
else
echo"<script>alert('cvv number is empty')</script>";
}
else
echo"<script>alert('Expiration is empty')</script>";
}
else
echo"<script>alert('Expiration is empty')</script>";
}
else
echo"<script>alert('card number is empty')</script>";
}
else
echo"<script>alert('name on card is empty')</script>";
}





if(isset($_POST['hide'])AND($_POST['hide'])=='h1')
{
if(isset($_POST['nameoncard1'])AND($_POST['nameoncard1'])!=null) 
{
	if(isset($_POST['cardno1'])AND($_POST['cardno1'])!=null) 
{
	if(isset($_POST['month1'])AND($_POST['month1'])!=null) 
{
if(isset($_POST['year1'])AND($_POST['year1'])!=null) 
{
	if(isset($_POST['cvvno1'])AND($_POST['cvvno1'])!=null) 
{
	
	$nameoncard1=trim($_POST['nameoncard1']);
	$cardno1=trim($_POST['cardno1']);
	$month1=trim($_POST['month1']);
	$year1=trim($_POST['year1']);
	$cvvno1=trim($_POST['cvvno1']);
	$obj->fpayment1($key,$key1,$nameoncard1,$cardno1,$month1,$year1,$cvvno1,$amount,$cid);
}
else
echo"<script>alert('cvv number is empty')</script>";
}
else
echo"<script>alert('Expiration is empty')</script>";
}
else
echo"<script>alert('Expiration is empty')</script>";
}
else
echo"<script>alert('card number is empty')</script>";
}
else
echo"<script>alert('name on card is empty')</script>";
}
$smartyObj->display('payment.tpl');
}
else
{	
	Header("location:login.php");
}
?>