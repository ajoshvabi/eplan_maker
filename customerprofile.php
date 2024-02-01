<?php
include_once"settings/settings.php"; 
include_once"classes/userclass.php";
$obj=new userclass(); 
session_start();
if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
{
$key=$_COOKIE['lkey'];
$a=$obj->customerprofile($key);
$smartyObj->assign("view",$a);
// session_start();
// if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
// {
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['name'])AND($_POST['name'])!=null)
{
if(isset($_POST['address']) AND ($_POST['address'])!=null)
{
if(isset($_POST['contactno'])AND($_POST['contactno'])!=null)
{
	if (preg_match('/^[0-9]*$/', $_POST['contactno']))	
		{
		$nm1=strlen($_POST['contactno']);
		if($nm1>=10 and $nm1<=12)
		{
if(isset($_POST['district'])AND($_POST['district'])!=null) 
{
if(isset($_POST['city']) AND ($_POST['city'])!=null)
{

if(isset($_POST['email'])AND($_POST['email'])!=null) 
{

$name=trim($_POST['name']);
$address=trim($_POST['address']);
$contactno=trim($_POST['contactno']); 
$district=trim($_POST['district']);
$city=trim($_POST['city']);
$email=trim($_POST['email']);
$obj->customeredit($name,$address,$contactno,$district,$city,$email,$key);


}
else
echo"<script>alert('Email is empty') </script>";
}
else
echo"<script>alert('City is empty')</script>";
}
else
echo"<script>alert('District is empty')</script>";
}
else
echo "<script> alert('Phone number should be 10 digit or 12 digit')</script>";	
}
else
echo "<script> alert('Please enter numbers for phone number')</script>";	
}
else
echo"<script>alert('Contactno is empty')</script>";
}
else
echo"<script>alert('Address is empty')</script>";
}
else
echo"<script>alert('Name is empty')</script>";
} 
$smartyObj->display("customersubheader.tpl");
$smartyObj->display("customerprofile.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>