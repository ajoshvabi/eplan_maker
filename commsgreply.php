<?php
// include_once"settings/settings.php"; 
// include_once"classes/userclass.php";
// $obj=new userclass(); 
// $key=$_COOKIE['lkey'];
// $cusid=$_GET['cusid'];
// session_start();
// if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
// {
// if(isset($_POST['hide'])AND($_POST['hide'])=='h')
// {
// if(isset($_POST['creply'])AND($_POST['creply'])!=null)
// {
// 	$reply=trim($_POST['creply']);
// 	$obj->commsgreply($key,$reply,$cusid);
// }
// else
// {
// 	echo"<script>alert('reply is empty')</script>";
// }
// }
// $smartyObj->display('customersubheader.tpl');
// $smartyObj->display("commsgreply.tpl");
// $smartyObj->display('footer.tpl');
// }
// else
// {	
// 	Header("location:login.php");
// }

?>
 


 <?php
include_once"settings/settings.php"; 
include_once"classes/userclass.php";
$obj=new userclass(); 
$key=$_COOKIE['lkey'];
$id=keytoid("login","lkey",$key);
$smartyObj->assign("id",$id);
$comid=$_GET['comid'];
$b=$obj->customermessageview2($key);
     $smartyObj->assign("cuview",$b);
     $a=$obj->commsgreplyview($key);
$smartyObj->assign("view",$a);
$a1=$obj->commsgreplyview1($key);
$smartyObj->assign("view1",$a1);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['message'])AND($_POST['message'])!=null)
{
	$message=trim($_POST['message']);
	$obj->message($key,$message,$comid);
	 
}
else
{
	echo"<script>alert('Message is empty')</script>";
}
}
// $smartyObj->display('customersubheader.tpl');
$smartyObj->display("message.tpl");
// $smartyObj->display('footer.tpl');

?>
