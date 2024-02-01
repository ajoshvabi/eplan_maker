<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
{
$key=$_COOKIE['lkey'];

// echo $key;exit;
// $a=$obj->companymessageview($key);
// $smartyObj->assign("view",$a);
$id=keytoid("login","lkey",$key);//company id
// echo $id;exit;
$key11=$_GET['lid'];// customer id

$n=$obj->cusname($key11);
     $smartyObj->assign("cun",$n);
$pid=$_GET['key1'];
// $comid=keytoid("login","lkey",$key1);
// echo $pid;exit();


$obj->updateviewcomstatus($pid,$key);


// $comid=$_GET['key1'];
// echo$comid;exit();
 //$comid=keytoid("planreq","rkey",$id1);
//echo $comid;exit;
// $qry3="select loginid from planreq where loginid='".$cid."";
// $exe=mysql_query($qry3);



// while($rr=mysql_fetch_array($exe))
//     	{
//     		$totalamount=$rr['totalamount'];
//     	}
//echo$qry3;exit;
//echo$comid;exit;
//$comid=keytoid("login","lkey",$key2);

$smartyObj->assign("id",$id);
$comid=$_GET['key1'];// planreq key rkey
// $b=$obj->customermessageview1($key,$key11,$pid);
																																																																										
//      $smartyObj->assign("cuview",$b);
//      $a=$obj->commsgreplyview($key);
// $smartyObj->assign("view",$a);
$a1=$obj->commsgreplyviewnew($key,$pid);
$smartyObj->assign("view1",$a1);

// echo $pid;exec();
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['message'])AND($_POST['message'])!=null)
{
	$message=trim($_POST['message']);
	$obj->message1($key,$message,$comid,$pid);
	 
}
else
{
	echo"<script>alert('Message is empty')</script>";
}
}
// $smartyObj->display('companysubheader.tpl');
$smartyObj->display('message2.tpl');
// $smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}

?>-	