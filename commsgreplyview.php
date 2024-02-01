<!-- <?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])AND($_COOKIE['logined'])==1)
{
$key=$_COOKIE['lkey'];
$a=$obj->commsgreplyview($key);
$smartyObj->assign("view",$a);
// $smartyObj->display('customersubheader.tpl');
$smartyObj->display('message.tpl');
}
else
{	
	Header("location:login.php");
}


?> -->