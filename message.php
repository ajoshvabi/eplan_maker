<?php
include_once"settings/settings.php"; 
include_once"classes/userclass.php";
$obj=new userclass(); 
session_start();
if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
{
$key=$_COOKIE['lkey'];
$id=keytoid("login","lkey",$key);
// echo $id;exit;
$smartyObj->assign("id",$id);
$comid=$_GET['comid'];
// echo$comid;exit();
$pid=$_GET['planid'];
$preqid=keytoid("planreq","rkey",$pid);
// echo $planreqid;exit();
//my
$n=$obj->comname($comid);
     $smartyObj->assign("cun",$n);
      // echo $id;exit();

$obj->updateviewstatus($preqid,$key);


$b=$obj->customermessageviewnew($key,$preqid);
     $smartyObj->assign("cuview",$b);

   /*  $a=$obj->commsgreplyview($key);
$smartyObj->assign("view",$a);*/



// $a1=$obj->commsgreplyview12($key,$preqid);
// $smartyObj->assign("view1",$a1);


if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['message'])AND($_POST['message'])!=null)
{
	$message=trim($_POST['message']);
	$obj->message($key,$message,$comid,$pid);
	 
}
else
{
	echo"<script>alert('Message is empty')</script>";
}
}
// $smartyObj->display('customersubheader.tpl');
$smartyObj->display("message.tpl");
// $smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}

?>
