<?php

include_once"settings/settings.php"; 
include_once"classes/userclass.php";
$obj=new userclass(); 
// session_start();
// if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
// {
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['companyname'])AND($_POST['companyname'])!=null)
{
if(isset($_POST['address']) AND ($_POST['address'])!=null)
{
if(isset($_POST['pincode'])AND($_POST['pincode'])!=null)
{
if (preg_match('/^[0-9]*$/', $_POST['pincode']))
	{
	$no=strlen($_POST['pincode']);
	if($no==6)
	{
if(isset($_POST['district'])AND($_POST['district'])!=null) 
{
if(isset($_POST['city']) AND ($_POST['city'])!=null)
{
if(isset($_POST['contactno'])AND($_POST['contactno'])!=null)
{
	if (preg_match('/^[0-9]*$/', $_POST['contactno']))	
{
$nm1=strlen($_POST['contactno']);
if($nm1>=10 and $nm1<=12)
{
if(isset($_POST['email'])AND($_POST['email'])!=null) 
{
if(isset($_POST['password']) AND ($_POST['password'])!=null)
{
$name=trim($_POST['companyname']);
$address=trim($_POST['address']);
$pincode=trim($_POST['pincode']); 
$district=trim($_POST['district']);
$city=trim($_POST['city']);
$contactno=trim($_POST['contactno']); 
$email=trim($_POST['email']);
$password=trim($_POST['password']); 
$obj->companyreg($name,$address,$pincode,$district,$city,$contactno,$email,$password);

}
else
echo"<script>alert('Password is empty')</script>";
}
else
echo"<script>alert('Email is empty') </script>";
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
echo"<script>alert('City is empty')</script>";
}
else
echo"<script>alert('District is empty')</script>";
}

else
echo "<script> alert('pin number must contain 6 characters')</script>";
}
else
echo "<script> alert('Please enter numbers for pincode')</script>";
}
else
echo"<script>alert('Pincode is empty')</script>";
}
else
echo"<script>alert('Address is empty')</script>";
}
else
echo"<script>alert('Company Name is empty')</script>";
} 
$smartyObj->display('subheader.tpl');
$smartyObj->display("companyreg.tpl");
$smartyObj->display('footer.tpl');
// }
// else
// {	
// 	Header("location:login.php");
// }

?>