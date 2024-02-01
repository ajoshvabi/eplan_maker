<?php
class userclass
{
	function companyreg($name,$address,$pincode,$district,$city,$contactno,$email,$password)
	{
	$enc=md5($password);
	$key=uniquekey("login","lkey");
	$qry="insert into login(lkey,email,password,usertype)values('".$key."','".$email."','".$enc."','1')";
	$exe=mysql_query($qry);
	$key1=uniquekey("company_reg","ckey");
	$id=keytoid("login","lkey",$key);
	$qry1="insert into company_reg(ckey,company_name,address,pincode,district,city,contactno,loginid)values('".$key1."','".$name."','".$address."','".$pincode."','".$district."','".$city."','".$contactno."','".$id."')";
	//echo $qry1;exit;
	$exe1=mysql_query($qry1);

	if($exe&&$exe1)
	{
		echo"<script>alert('registration successfull')</script>";

	}
	else
	{
		echo"<script>alert('registration unsuccessfull')</script>";

	}

	}
	function customerreg($name,$address,$contactno,$district,$city,$email,$password)
	{
		$enc=md5($password);
		$key=uniquekey("login","lkey");
		$qry="insert into login(lkey,email,password,usertype,status)values('".$key."','".$email."','".$enc."','2','1')";
		$exe=mysql_query($qry);
	    $key1=uniquekey("customer_reg","cuskey");
	    $id=keytoid("login","lkey",$key);
	    $qry1="insert into customer_reg(cuskey,name,address,contactno,district,city,loginid)values('".$key1."','".$name."','".$address."','".$contactno."','".$district."','".$city."','".$id."')";
	//echo $qry1;exit;
	    $exe1=mysql_query($qry1);

	    if($exe&&$exe1)
	    {
		 echo"<script>alert('registration successfull')</script>";
        }
	    else
	    {
		 echo"<script>alert('registration unsuccessfull')</script>";
 
	    }
	}

	     function admincompanyview()
	     {
	     	$qry = "select * from company_reg inner join login on login.id = company_reg.loginid";
	     	$exe=mysql_query($qry);
	     	$arr =array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr[] =$rr;
	     	}
			return $arr;
	     }
	     function admincustomerview()
	     {
	     	$qry="select * from customer_reg inner join login on login.id=customer_reg.loginid";
	     	$exe=mysql_query($qry);
	     	$arr=array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr[]=$rr;

	     	}
	     	return $arr;
	     }
	     function approvecompany($key)

	     {
		  $id=keytoid("login","lkey",$key);
		  $qry="update login set status='1' where id='".$id."'";
		  $exe=mysql_query($qry);
		   if($exe)
		{
			echo"<script>alert('approved successfully');
			window.location.href='admincompanyview.php';
			</script>";
		}
		else
		{
			echo"<script>alert('approved unsuccessfully')</script>";
		}
         }
         function rejectcompany($key)

	     {
		  $id=keytoid("login","lkey",$key);
		  $qry="update login set status='2' where id='".$id."'";
		  $exe=mysql_query($qry);
		   if($exe)
		{
			echo"<script>alert('reject successfully');
			window.location.href='admincompanyview.php';
			</script>";
		}
		else
		{
			echo"<script>alert('reject unsuccessfully')</script>";
		}
	}
	function login($email,$password)
	{
		$enc=md5($password);
		$qry="select lkey,usertype,status from login where email='".$email."' and password='".$enc."'";
		$exe=mysql_query($qry);
		$key=null;
		$c=0;
		while ($rr=mysql_fetch_array($exe))
		 {
			$key=$rr['lkey'];
			$u=$rr['usertype'];
			$s=$rr['status'];
			$c=$c+1;
		}
		if ($c>0)
		 { 
		 	if($s!=3)
		 	{
		 	if($s==1)
		 	{
		 		setcookie("lkey",$key);
		 		setcookie("logined",1);
		 		if ($u==0)
		 		{
		 			header("location:admin.php");
		 		}
		 		elseif ($u==1)
		 		{
		 			header("location:companyhome.php");
		 		}
		 		elseif ($u==2)
		 		{
		 			header("location:customerhome.php");
		 		}

		 	}
		 	else
		 	 echo "<script>alert('waiting for admin approval')</script>";

		}
		else
			echo "<script>alert('You are freezed')</script>";
		 }
		else
			echo "<script>alert('login failed')</script>";
	}

function companyprofile($key)
{
	$a=keytoid("login","lkey",$key);
	$qry="select * from company_reg inner join  login on login.id=company_reg.loginid where login.id='".$a."' ";
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}
 function companyedit($name,$address,$pincode,$district,$city,$contactno,$email,$key)
{
 	$id=keytoid("login","lkey",$key);
$qry1="update company_reg set company_name='".$name."',address='".$address."',pincode='".$pincode."',district='".$district."',city='".$city."',contactno='".$contactno."' where company_reg.loginid='".$id."'";
$exe1=mysql_query($qry1);
$qry2="update login set email='".$email."' where id='".$id."'";

$exe2=mysql_query($qry2);
if($exe1 && $exe2)
{
	echo "<script> alert('Update successfull');
	window.location.href='companyprofile.php';</script>";
}
else
{
	echo "<script> alert('Update unsuccessfull');
	window.location.href='companyprofile.php';</script>";
	

}
   

}
function customerprofile($key)
{
	$a=keytoid("login","lkey",$key);
	$qry="select * from customer_reg inner join  login on login.id=customer_reg.loginid where login.id='".$a."' ";
	// echo$qry;exit;
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}



function customeredit($name,$address,$contactno,$district,$city,$email,$key)
{
 	$id=keytoid("login","lkey",$key);
$qry1="update customer_reg set name='".$name."',address='".$address."',contactno='".$contactno."',district='".$district."',city='".$city."' where loginid='".$id."'";
// echo $qry1;exit;
$exe1=mysql_query($qry1);
$qry2="update login set email='".$email."' where id='".$id."'";

$exe2=mysql_query($qry2);
if($exe1&&$exe2)
{
	echo "<script> alert('Update successfull');
	window.location.href='customerprofile.php';</script>";
}
else
{
	echo "<script> alert('Update unsuccessfull');
	window.location.href='customerprofile.php';</script>";
	
}
}
function freezecompany($key)

	     {
		  $id=keytoid("login","lkey",$key);
		  $qry="update login set status='3' where id='".$id."'";
		  // echo($qry);exit();
		  $exe=mysql_query($qry);
		   if($exe)
		{
			echo"<script>alert('Freeze successfully');
			window.location.href='admincompanyview.php';
			</script>";
		}
		else
		{
			echo"<script>alert('Freeze unsuccessfully')</script>";
		}
         }




function unfreezecompany($key)

	     {
		  $id=keytoid("login","lkey",$key);

		  $qry="update login set status='1' where id='".$id."'";
		  // echo($qry);exit();
		  $exe=mysql_query($qry);
		   if($exe)
		{
			echo"<script>alert('Unfreeze successfully');
			window.location.href='admincompanyview.php';
			</script>";
		}
		else
		{
			echo"<script>alert('Unfreeze unsuccessfully')</script>";
		}
         }


function complaint($key,$complaint)
{
	$id=keytoid("login","lkey",$key);
	$key1=uniquekey("complaint","comkey");
	$date=date('Y-m-d');
	$qry="insert into complaint(comkey,complaint,loginid,date) values ('".$key1."','".$complaint."','".$id."','".$date."')";
	//echo $qry;exit;
	    $exe1=mysql_query($qry);

	    if($exe1)
	    {
		 echo"<script>alert('complaint added successfull')</script>";
        }
	    else
	    {
		 echo"<script>alert('complaint added unsuccessfull')</script>";
 
	    }
	

}
 function complaintview($key)
 {
 	        $id=keytoid("login","lkey",$key);
	     	$qry = "select * from complaint where loginid ='".$id."'";
	     	$exe=mysql_query($qry);
	     	$arr =array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr[] =$rr;
	     	}
			return $arr;
	     }

function selectcomplaint($key)
	{
		$id=keytoid("complaint","comkey",$key);
		$qry="select * from complaint where id='".$id."'";
		//echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
		$arr[]=$rr;
	    }
	    return $arr;
	}
function editcomplaint($complaint,$key)
	{
		$id=keytoid("complaint","comkey",$key);
		$qry="update complaint set complaint='".$complaint."'
		 where id='".$id."'";
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('updation successfull')</script>";
			header("location:complaintview.php?");
		}
		else
		{
			echo"<script>alert('updation unsuccessfull')</script>";
		}

	}

function deletecomplaint($key)
	{
		$id=keytoid("complaint","comkey",$key);
		 $qry="delete from complaint where id='".$id."'";
		 $exe=mysql_query($qry);
		 if($exe)
		 {
		 	echo "<script> alert('deletion successfull');
		 	window.location.href='complaintview.php';</script>";
		 }
		 else
		 {
		 	echo "<script> alert('deletion unsuccessfull');
		 	window.location.href='complaintview.php';</script>";
		 }
	}


 function admincomplaintview()
	     {
	     	$qry = "select * from complaint inner join login on login.id = complaint.loginid inner join  customer_reg  on customer_reg.loginid =  complaint.loginid ";
	     	$exe=mysql_query($qry);
	     	;
	     	$arr =array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr[] =$rr;
	     	}
			return $arr;
	     }





function complaintreply($key,$reply)
{
	$id=keytoid("complaint","comkey",$key);
	
	$qry="update complaint set reply='".$reply."' where id='".$id."'";
	    $exe=mysql_query($qry);

	    if($exe)
	    {
		 echo"<script>alert('reply added successfull')</script>";
        }
	    else
	    {
		 echo"<script>alert('reply added unsuccessfull')</script>";
        }
 }



 function searchcompany($searchcompany)
 {
 	$qry="select * from company_reg where company_name ='".$searchcompany."' or city='".$searchcompany."'
 	or district='".$searchcompany."'";
 	$enc=mysql_query($qry);
 	$arr=array();
 	while ($rr=mysql_fetch_array($enc))
 	 {
 		$arr[]=$rr;

 	}
 	return $arr;
 }


function planrequirement($buildingtype,$model,$noofrooms,$otherrequirements,$key,$key1)
{
	$id=keytoid("company_reg","ckey",$key);
	$id1=keytoid("login","lkey",$key1);
	$key=uniquekey("planreq","rkey");
	
	$qry="insert into planreq(rkey,loginid,buildingtype,model,rooms,otherreq,companyid)values('".$key."','".$id1."','".$buildingtype."','".$model."','".$noofrooms."','".$otherrequirements."','".$id."')";
	$exe=mysql_query($qry);
//echo $qry;exit;
	if($exe)
	{
		echo"<script>alert('Plan requirments inserted successfull')</script>";

	}
	else
	{
		echo"<script>alert('Insertion unsuccessfull')</script>";
	}



}



function viewreq($key)
{
	 $id=keytoid("login","lkey",$key);
	 $qry = "select *,company_reg.loginid as cmid,planreq.id as pid from planreq  inner join company_reg on company_reg.id=planreq.companyid  where planreq.loginid ='".$id."'";
	 $exe=mysql_query($qry);
	 $arr =array();
	 while($rr=mysql_fetch_array($exe))
	 {
	 	$qry1= "select count(id) from message where message.recieverid ='".$id."' && view_status='0' && message.planreqid ='".$rr['pid']."'
	 ";
	 	$exe1=mysql_query($qry1);
	 	$arr1 = null;	
	 	while($rr1=mysql_fetch_array($exe1))
	     {
	     	$arr1 = $rr1['count(id)'];
	     	$rr['mcount'] = $arr1;
	     }
	     $arr[] = $rr;

	 }
	return $arr;
}

function selectrequirements($key1)
	{
		//echo$key1;exit;
		$id=keytoid("planreq","rkey",$key1);
		//echo$id;exit;
	   
		$qry="select * from planreq where id='".$id."'";
		//echo $qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
		$arr[]=$rr;
	    }
	    return $arr;
	}



	function editrequirement($buildingtype,$model,$noofrooms,$otherrequirements,$key1)
	{
		$id=keytoid("planreq","rkey",$key1);
		


		$qry="update planreq set buildingtype='".$buildingtype."',model='".$model."',rooms='".$noofrooms."',otherreq='".$otherrequirements."' where id='".$id."'";
		$exe=mysql_query($qry);
		if($exe)
		{
			echo"<script>alert('updation successfull')</script>";
		}
		else
		{
			echo"<script>alert('updation unsuccessfull')</script>";
		}

	}




function  companyreqview($key)
	{
		$id=keytoid("login","lkey",$key);
		$qry="select *,planreq.id as pid  from planreq inner join company_reg on company_reg.id=planreq.companyid inner join customer_reg
		on customer_reg.loginid=planreq.loginid where company_reg.loginid='".$id."'";
		// echo $qry;exit;

		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$qry1= "select count(id) from message where message.recieverid ='".$id."' && view_status='0' && message.planreqid ='".$rr['pid']."'
			";
				     	// echo $qry1;exit;

	 	$exe1=mysql_query($qry1);

	 	$arr1 = null;	
	 	while($rr1=mysql_fetch_array($exe1))
	     {
	     	$arr1 = $rr1['count(id)'];
	     	$rr['mcount'] = $arr1;
	     	// echo $arr;exit;
	     	// echo $rr['loginid'];exit;
	     }
		$arr[]=$rr;
	    }
	    return $arr;
	}

	function reqrespond($key,$amount,$files=null)
	{
		$id=keytoid("planreq","rkey",$key);
		$qry="update planreq set tamount='".$amount."',quote='".$files['name']."' where id='".$id."'";
				// echo $qry;exit;

        $exe=mysql_query($qry);
        $d="uploads/".$key;
        if($exe)
		{
			mkdir($d);
			move_uploaded_file($files["tmp_name"],$d."/".$files["name"]);
			echo"<script>alert('updation successfull')</script>";
		}
		else
		{
			echo"<script>alert('updation unsuccessfull')</script>";
		}
    }


    function approvecomreply($key)
    {
    	$id=keytoid("planreq","rkey",$key);
    	$qry="update planreq set status='1' where id='".$id."'";
    	
    	$exe=mysql_query($qry);
    	if($exe)
    	{
    		echo"<script>alert('approve successfull');window.location.href='viewreq.php';</script>";
		}
		else
		{
    		echo"<script>alert('approve unsuccessfull');window.location.href='viewreq.php';</script>";

		}
    	
    }



    function payment($key,$key1,$nameoncard,$cardno,$month,$year,$cvvno,$amount,$cid)
    {
    	$id=keytoid("login","lkey",$key1);
    	$pid=keytoid("planreq","rkey",$key);
    	$currentdate=date('Y-m-d');

    	$qry="select totalamount from bank where cardno='".$cardno."' and cvv='".$cvvno."'";
    	//echo $qry;exit;
    	$exe=mysql_query($qry);
    	$totalamount=null;
    	while($rr=mysql_fetch_array($exe))
    	{
    		$totalamount=$rr['totalamount'];
    	}
    	//echo $totalamount;exit;
    	$percentageamount=($amount*40)/100;
    	if ($totalamount>=$percentageamount)
    	 {
    	 	$qry="insert into payment(paykey,nameoncard,cardno,cvv,expmonth,expyear,amount,loginid,currentdate)values('".$pid."','".$nameoncard."','".$cardno."','".$cvvno."','".$month."','".$year."','".$amount."','".$id."','".$currentdate."')";
    	 	$exe=mysql_query($qry);
    	 	$debitamount=$totalamount-$percentageamount;
    	 	$qry1="update bank set totalamount='".$debitamount."' where cardno='".$cardno."'&&cvv='".$cvvno."'";
    	 	//echo $qry1;exit;
    	 	$exe1=mysql_query($qry1);
    	 	$cidqry="select contactno from company_reg where id='".$cid."'";
    	 	$exe2=mysql_query($cidqry);
    	 	$contactnum=null;
    	 	while($rr=mysql_fetch_array($exe2))
    	{
    		$contactnum=$rr['contactno'];
    	}

    	 	$camount="select totalamount from bank where contactno='".$contactnum."'";
    	 	//echo $camount;exit;
    	 	$exe3=mysql_query($camount);
    	    $totalamount1=null;



    	while($rr=mysql_fetch_array($exe3))
    	{
    		$totalamount1=$rr['totalamount'];
    	}
         $creditamount=$totalamount1+$percentageamount;
    	 $qry2="update bank set totalamount='".$creditamount."' where contactno='".$contactnum."'";
    	 $exe2=mysql_query($qry2);
    	  $qry3="update planreq set pstatus='1' where id='".$pid."'";
    	 $exe3=mysql_query($qry3);
    	 if($exe2)
    	 {
    	 	 echo"<script>alert('Payment successfully!');window.location.href='viewreq.php';</script>";
    	 }
    	 
    	 }
    	 else
    	 {
    	 	 echo"<script>alert('insufficient balance');window.location.href='viewreq.php';</script>";
          }
    	}





function payment1($key,$key1,$nameoncard1,$cardno1,$month1,$year1,$cvvno1,$amount,$cid)

    {
    	$id=keytoid("login","lkey",$key1);
    	$pid=keytoid("planreq","rkey",$key);
    	$currentdate=date('Y-m-d');

    	$qry="select totalamount from bank where cardno='".$cardno1."' and cvv='".$cvvno1."'";
    	//echo $qry;exit;
    	$exe=mysql_query($qry);
    	$totalamount=null;
    	while($rr=mysql_fetch_array($exe))
    	{
    		$totalamount=$rr['totalamount'];
    	}
    	//echo $totalamount;exit;
    	$percentageamount=($amount*40)/100;
    	if ($totalamount>=$percentageamount)
    	 {
    	 	$qry="insert into payment(paykey,nameoncard,cardno,cvv,expmonth,expyear,amount,loginid,currentdate)values('".$pid."','".$nameoncard1."','".$cardno1."','".$cvvno1."','".$month1."','".$year1."','".$amount."','".$id."','".$currentdate."')";
    	 	$exe=mysql_query($qry);
    	 	$debitamount=$totalamount-$percentageamount;
    	 	$qry1="update bank set totalamount='".$debitamount."' where cardno='".$cardno1."'&&cvv='".$cvvno1."'";
    	 	//
    	 	$exe1=mysql_query($qry1);
    	 	$cidqry="select contactno from company_reg where id='".$cid."'";
    	 	$exe2=mysql_query($cidqry);
    	 	$contactnum=null;
    	 	while($rr=mysql_fetch_array($exe2))
    	{
    		$contactnum=$rr['contactno'];
    	}

    	 	$camount="select totalamount from bank where contactno='".$contactnum."'";
    	 	//echo $camount;exit;
    	 	$exe3=mysql_query($camount);
    	    $totalamount1=null;



    	while($rr=mysql_fetch_array($exe3))
    	{
    		$totalamount1=$rr['totalamount'];
    	}
         $creditamount=$totalamount1+$percentageamount;
    	 $qry2="update bank set totalamount='".$creditamount."' where contactno='".$contactnum."'";
    	 $exe2=mysql_query($qry2);
    	 $qry3="update planreq set pstatus='1' where id='".$pid."'";
    	 $exe3=mysql_query($qry3);
    	 if($exe2)
    	 {
    	 	 echo"<script>alert('Payment successfully!');window.location.href='viewreq.php';</script>";
    	 }
    	 
    	 }
    	 else
    	 {
    	 	 echo"<script>alert('insufficient balance');window.location.href='viewreq.php';</script>";
          }

    	}



    	function adddesign($key,$files=null)
	{
		$id=keytoid("planreq","rkey",$key);
		$qry="update planreq set design='".$files['name']."' where id='".$id."'";
				// echo $qry;exit;

        $exe=mysql_query($qry);
        

        $d="uploads/".$key;
        if($exe)
		{
			mkdir($d);
			move_uploaded_file($files["tmp_name"],$d."/".$files["name"]);
			echo"<script>alert('updation successfull')</script>";
		}
		else
		{
			echo"<script>alert('updation unsuccessfull')</script>";
		}
    }



function addsuggestion($key,$suggestion)
{
	$id=keytoid("planreq","rkey",$key);
	$qry="update planreq set suggestion='".$suggestion."' where id='".$id."'";
	 $exe=mysql_query($qry);
	 if($exe)
    	 {
    	 	 echo"<script>alert('suggestion added successfully!')</script>";
    	 }
       	 else
    	 {
    	 	 echo"<script>alert('suggestion added unsuccessfully')</script>";
          }
		

}




	function mysuggestion($key)
 {
 	        $id=keytoid("planreq","rkey",$key);
	     	$qry="select * from planreq where id ='".$id."'";
	     	$exe=mysql_query($qry);
	     	$arr =array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr[] =$rr;
	     	}
			return $arr;
	     
}
 	 function mysuggestion_select($key)
 	 {
 	 	   $id=keytoid("planreq","rkey",$key);
	     	$qry = "select * from planreq where id ='".$id."'";
	     	$exe=mysql_query($qry);
	     	$arr =array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr[] =$rr;
	     	}
			return $arr;
	     
 	 }      


 // function viewmysuggestion($key)
 // {
 	
 // }

function editmysuggestion($suggestion,$key)
 {
 	 $id=keytoid("planreq","rkey",$key);
 	 $qry="update planreq set suggestion='".$suggestion."' where id='".$id."'";
 	 // echo $qry;exit;
	 $exe=mysql_query($qry);
	 if($exe)
    	 {
    	 	 echo"<script>alert('suggestion added successfully!')</script>";
    	 }
       	 else
    	 {
    	 	 echo"<script>alert('suggestion added unsuccessfully')</script>";
          }
		

 	
 }




 function deletesuggestion($key)
	{
		$id=keytoid("planreq","rkey",$key);
		 $qry="update planreq set suggestion=' ' where id='".$id."'";
		// echo $qry;exit;
		 $exe=mysql_query($qry);
		 if($exe)
		 {
		 	echo "<script> alert('deletion successfull');
		 	window.location.href='mysuggestion.php';</script>";
		 }
		 else
		 {
		 	echo "<script> alert('deletion unsuccessfull');
		 	window.location.href='mysuggestion.php';</script>";
		 }
	}



function approvedesign($key)
{
	$id=keytoid("planreq","rkey",$key);



	$qry="select suggestion from planreq where id='".$id."'";
        $exe=mysql_query($qry);
        if ($exe!=null)
         {

        	$qry1="update planreq set acceptstatus='1' where id='".$id."'";
        	$exe1=mysql_query($qry1);

        }
        if($exe)
		 {
		 	echo "<script> alert('approve successfull');
		 	window.location.href='viewreq.php';</script>";
		 }
		 else
		 {
		 	echo "<script> alert('approve unsuccessfull');
		 	window.location.href='viewreq.php';</script>";
		 }

}



 function fpayment($key,$key1,$nameoncard,$cardno,$month,$year,$cvvno,$amount,$cid)
    {
    	$id=keytoid("login","lkey",$key1);
    	$pid=keytoid("planreq","rkey",$key);
    	$currentdate=date('Y-m-d');

    	$qry="select totalamount from bank where cardno='".$cardno."' and cvv='".$cvvno."'";
    	//echo $qry;exit;
    	$exe=mysql_query($qry);
    	$qqry="select acceptstatus from planreq where id='".$pid."'";
    	$qexe=mysql_query($qqry);
    	$totalamount=null;
    
    	
    	while($rr=mysql_fetch_array($exe))
    	{
    		$totalamount=$rr['totalamount'];
    	}
    	//echo $totalamount;exit;
    	$percentageamount=($amount*60)/100;
    	if ($totalamount>=$percentageamount)
    	 {
    	 	$qry="insert into payment(paykey,nameoncard,cardno,cvv,expmonth,expyear,amount,loginid,currentdate)values('".$pid."','".$nameoncard."','".$cardno."','".$cvvno."','".$month."','".$year."','".$amount."','".$id."','".$currentdate."')";
    	 	$exe=mysql_query($qry);
    	 	$debitamount=$totalamount-$percentageamount;
    	 	$qry1="update bank set totalamount='".$debitamount."' where cardno='".$cardno."'&&cvv='".$cvvno."'";
    	 	//echo $qry1;exit;
    	 	$exe1=mysql_query($qry1);
    	 	$cidqry="select contactno from company_reg where id='".$cid."'";
    	 	$exe2=mysql_query($cidqry);
    	 	$contactnum=null;
    	 	while($rr=mysql_fetch_array($exe2))
    	{
    		$contactnum=$rr['contactno'];
    	}

    	 	$camount="select totalamount from bank where contactno='".$contactnum."'";
    	 	//echo $camount;exit;
    	 	$exe3=mysql_query($camount);
    	    $totalamount1=null;



    	while($rr=mysql_fetch_array($exe3))
    	{
    		$totalamount1=$rr['totalamount'];
    	}
         $creditamount=$totalamount1+$percentageamount;
    	 $qry2="update bank set totalamount='".$creditamount."' where contactno='".$contactnum."'";
    	 $exe2=mysql_query($qry2);
    	  $qry3="update planreq set pstatus='2' where id='".$pid."'";
    	 $exe3=mysql_query($qry3);
    	 if($exe2)
    	 {
    	 	 echo"<script>alert('Payment successfully!')</script>";
    	 }
    	 
    	 }
    	 else
    	 {
    	 	 echo"<script>alert('insufficient balance')</script>";
          }
    	}





function fpayment1($key,$key1,$nameoncard1,$cardno1,$month1,$year1,$cvvno1,$amount,$cid)

    {
    	$id=keytoid("login","lkey",$key1);
    	$pid=keytoid("planreq","rkey",$key);
    	$currentdate=date('Y-m-d');

    	$qry="select totalamount from bank where cardno='".$cardno1."' and cvv='".$cvvno1."'";
    	//echo $qry;exit;
    	$exe=mysql_query($qry);
    	$totalamount=null;
    	while($rr=mysql_fetch_array($exe))
    	{
    		$totalamount=$rr['totalamount'];
    	}
    	//echo $totalamount;exit;
    	$percentageamount=($amount*60)/100;
    	if ($totalamount>=$percentageamount)
    	 {
    	 	$qry="insert into payment(paykey,nameoncard,cardno,cvv,expmonth,expyear,amount,loginid,currentdate)values('".$pid."','".$nameoncard1."','".$cardno1."','".$cvvno1."','".$month1."','".$year1."','".$amount."','".$id."','".$currentdate."')";
    	 	$exe=mysql_query($qry);
    	 	$debitamount=$totalamount-$percentageamount;
    	 	$qry1="update bank set totalamount='".$debitamount."' where cardno='".$cardno1."'&&cvv='".$cvvno1."'";
    	 	//
    	 	$exe1=mysql_query($qry1);
    	 	$cidqry="select contactno from company_reg where id='".$cid."'";
    	 	$exe2=mysql_query($cidqry);
    	 	$contactnum=null;
    	 	while($rr=mysql_fetch_array($exe2))
    	{
    		$contactnum=$rr['contactno'];
    	}

    	 	$camount="select totalamount from bank where contactno='".$contactnum."'";
    	 	//echo $camount;exit;
    	 	$exe3=mysql_query($camount);
    	    $totalamount1=null;



    	while($rr=mysql_fetch_array($exe3))
    	{
    		$totalamount1=$rr['totalamount'];
    	}
         $creditamount=$totalamount1+$percentageamount;
    	 $qry2="update bank set totalamount='".$creditamount."' where contactno='".$contactnum."'";
    	 //echo $qry2;exit;
    	 $exe2=mysql_query($qry2);

    	 $qry3="update planreq set pstatus='2' where id='".$pid."'";
    	 $exe3=mysql_query($qry3);
    	 if($exe2)
    	 {
    	 	 echo"<script>alert('Payment successfully!')</script>";
    	 }
    	 
    	 }
    	 else
    	 {
    	 	 echo"<script>alert('insufficient balance')</script>";
          }

    	}



function message($key,$message,$comid,$pid)
{
	$id=keytoid("login","lkey",$key);
	$key=uniquekey("message","mkey");
	$planid=keytoid("planreq","rkey",$pid);

	$date=date('Y-m-d');
	$time=date('h:i:sa');
	$qry="insert into message(mkey,message,senderid,cdate,ctime,recieverid,planreqid) values ('".$key."','".$message."','".$id."','".$date."','".$time."','".$comid."','".$planid."')";
	// echo $qry;exit;
	    $exe=mysql_query($qry);

	    if($exe)
	    {
		header("location:message.php?comid={$comid}&&planid={$pid}");
        }
	    else
	    {
		 echo"<script>alert('message added unsuccessfull')</script>";
 
	    }




}



















function message1($key,$message,$comid,$pid)
{
	$id=keytoid("login","lkey",$key);
	$key=uniquekey("message","mkey");
	$planid=keytoid("planreq","rkey",$pid);
	$date=date('Y-m-d');
	$time=date('h:i:sa');



	$qry1="select loginid from planreq where rkey='".$comid."'";
	// echo $qry1;exit;
	$exe1=mysql_query($qry1);
	$loid=null;
	while($rr=mysql_fetch_array($exe1))
	{
		$loid=$rr['loginid'];

	}







	$qry="insert into message(mkey,message,senderid,recieverid,cdate,ctime,planreqid) values ('".$key."','".$message."','".$id."','".$loid."','".$date."','".$time."','".$planid."')";
	// echo $qry;exit;
	    $exe=mysql_query($qry);

	    if($exe)
	    {
	    	header("location:companymessageview.php?key1={$comid}&&lid={$pid}");
        }
	    else
	    {
		 echo"<script>alert('message added unsuccessfull')</script>";
 
	    }




}




function companymessageview($key)
{
	        $id=keytoid("login","lkey",$key);
	     	$qry = "select * from message inner join customer_reg on message.senderid=customer_reg.loginid where recieverid='".$id."'" ;
	     	// where comid ='".$id."'"

	     	// echo $qry;exit;
	     	$exe=mysql_query($qry);
	        // $qry1 = "select * from customer_reg where cusid ='".$id."'";
	        // $qry = "select * from company_reg inner join login on login.id = company_reg.loginid";


	     	$arr=array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr[] =$rr;
	     	}
			return $arr;





}



function commsgreply($key,$reply,$comid)
{
	$id=keytoid("login","lkey",$key);
	$key=uniquekey("message","mkey");
	$date=date('Y-m-d');
	$time=date('h:i:sa');
	$qry="insert into message(mkey,message,senderid,recieverid,cdate,ctime) values ('".$key."','".$reply."','".$id."','".$comid."','".$date."','".$time."')";
	//echo $qry;exit;
	    $exe=mysql_query($qry);

	    if($exe)
	    {
		 echo"<script>alert('message sented successfull')</script>";
        }
	    else
	    {
		 echo"<script>alert('Reply sented unsuccessfull')</script>";
 
	    }




}


// function commsgreplyview($key)
// {
// 	        $id=keytoid("login","lkey",$key);
// 	      //  $qry = "select * from message where comid ='".$id."'"
// 	     	$qry = "select * from message inner join company_reg on message.senderid=company_reg.loginid where recieverid='".$id."'";
// 	     	//echo $qry;exit;
// 	     	$exe=mysql_query($qry);
	        

// 	     	$arr=array();
// 	     	while($rr=mysql_fetch_array($exe))
// 	     	{
// 	     		$arr[] =$rr;
// 	     	}
// 			return $arr;


// }








function customermessageview1($key,$key11,$pid)//key11 customer    key company
{
	       $id=keytoid("login","lkey",$key);
	            // $id1=keytoid("login","lkey",$key11);














	       
	            // echo $id1;exit;
	        $pkey=keytoid("planreq","rkey",$pid);

	     	$qry = "select * from message inner join customer_reg on message.senderid=customer_reg.loginid where senderid='".$key11."'&& recieverid='".$id."' and planreqid='".$pkey."'" ;
	     	// where comid ='".$id."'"

	         // echo $qry;exit;
	     	$exe=mysql_query($qry);
	     	$arr=array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr[] =$rr;
	     	}
			return $arr;
}

function customermessageviewnew($key,$preqid)
{
	        $id=keytoid("login","lkey",$key);

	        $qry = "select * from message where (recieverid='".$id."' or senderid='".$id."') and planreqid='".$preqid."'" ;
	     	// where comid ='".$id."'"

	        // echo $qry;exit;
	     	$exe=mysql_query($qry);
	     	$arr=array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr[] =$rr;
	     	}
			return $arr;
}



function commsgreplyviewnew($key,$pid)
{
	        $id=keytoid("login","lkey",$key);
	        $preqid=keytoid("planreq","rkey",$pid);


	     	$qry = "select * from message where (recieverid='".$id."' or senderid='".$id."') and planreqid='".$preqid."'" ;
	     	// where comid ='".$id."'"

	        // echo $qry;exit;
	     	$exe=mysql_query($qry);
	     	$arr=array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr[] =$rr;
	     	}
			return $arr;
}



function customermessageview($key,$preqid)
{
	        $id=keytoid("login","lkey",$key);

	     	$qry = "select * from message where recieverid='".$id."' and planreqid='".$preqid."'" ;
	     	// where comid ='".$id."'"

	        // echo $qry;exit;
	     	$exe=mysql_query($qry);
	     	$arr=array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr[] =$rr;
	     	}
			return $arr;
}

function customermessageview2($key)
{
	        $id=keytoid("login","lkey",$key);

	     	$qry = "select * from message inner join customer_reg on message.senderid=customer_reg.loginid where senderid='".$id."'" ;
	     	// where comid ='".$id."'"

	        // echo $qry;exit;
	     	$exe=mysql_query($qry);
	     	$arr=array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr[] =$rr;
	     	}
			return $arr;
}





function commsgreplyview($key)
{
	        $id=keytoid("login","lkey",$key);

	     	$qry = "select * from message inner join customer_reg on message.senderid=customer_reg.loginid where recieverid='".$id."'" ;
	     	// where comid ='".$id."'"

	         //echo $qry;exit;
	     	$exe=mysql_query($qry);
	     	$arr=array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr[] =$rr;
	     	}
			return $arr;





}
function commsgreplyview123($key,$comid)
{
	        $id=keytoid("login","lkey",$key);

	     	$qry = "select * from message inner join customer_reg on message.senderid=customer_reg.loginid where recieverid='".$id."'" ;
	     	// where comid ='".$id."'"

	         //echo $qry;exit;
	     	$exe=mysql_query($qry);
	     	$arr=array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr[] =$rr;
	     	}
			return $arr;






}


function commsgreplyview12($key,$preqid)
{
	        $id=keytoid("login","lkey",$key);

	     	$qry = "select * from message where  senderid='".$id."' and planreqid='".$preqid."'" ;
	     	// where comid ='".$id."'"

	         // echo $qry;exit;
	     	$exe=mysql_query($qry);
	     	$arr=array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr[] =$rr;
	     	}
			return $arr;





}
function commsgreplyview120($key,$key11,$pid)
{
	        $id=keytoid("login","lkey",$key);
	         $pkey=keytoid("planreq","rkey",$pid);

	     	$qry = "select * from message where  senderid='".$id."' and recieverid='".$key11."' and planreqid='".$pkey."'" ;
	     	// where comid ='".$id."'"

	         //echo $qry;exit;
	     	$exe=mysql_query($qry);
	     	$arr=array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr[] =$rr;
	     	}
			return $arr;





}

function count_message($key)
{
	$id=keytoid("login","lkey",$key);
	$qry="select count(message),planreqid from message inner join customer_reg on customer_reg.loginid=message.recieverid where message.recieverid='".$id."' and view_status='0'";
	$exe=mysql_query($qry);
	     	$arr=null;
	     	$id=null;
	     	$ar=array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr=$rr['count(message)'];
	     		$ar['count']=$arr;
	     		$id=$rr['planreqid'];
	     		$ar['planreqid']=$id;

	     	}
			return $ar;

}
function count_message_company($key)
{
	$id=keytoid("login","lkey",$key);
	$qry="select count(message),planreqid from message inner join company_reg on company_reg.loginid=message.recieverid where message.recieverid='".$id."' and view_status='0'";
	//echo$qry;exit();
	$exe=mysql_query($qry);
	     	$arr=null;
	     	$id=null;
	     	$ar=array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr=$rr['count(message)'];
	     		$ar['count']=$arr;
	     		$id=$rr['planreqid'];
	     		$ar['planreqid']=$id;

	     	}
			return $ar;

}




function comname($comid)
{
	   // $id=keytoid("login","lkey",$key);

	     	$qry = "select company_name from company_reg where loginid='".$comid."'";
	     	// where comid ='".$id."'"

	         // echo $qry;exit;
	     	$exe=mysql_query($qry);
	     	$arr=array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr['company_name'] =$rr;
	     	}
			return $arr;

}


function cusname($key11)
{
	  //$id=keytoid("login","lkey",$key);

	     	$qry = "select name from customer_reg where loginid='".$key11."'";
	     	// where comid ='".$id."'"

	         //echo $qry;exit;
	     	$exe=mysql_query($qry);
	     	$arr=array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr['company_name'] =$rr;
	     	}
			return $arr;

}






function countcompany()
{
	$qry="select * from company_reg";
	//echo $qry;exit;
	$exe=mysql_query($qry);
	$arr=array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr[] =$rr;
	     	}
$comct=count($arr);
//echo $comct;exit;
return $comct;

}
function countcustomer()
{
	$qry="select * from customer_reg";
	//echo $qry;exit;
	$exe=mysql_query($qry);
	$arr=array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr[] =$rr;
	     	}
$cusct=count($arr);
//echo $comct;exit;
return $cusct;

}
function countcomplaints()
{
	$qry="select * from complaint";
	//echo $qry;exit;
	$exe=mysql_query($qry);
	$arr=array();
	     	while($rr=mysql_fetch_array($exe))
	     	{
	     		$arr[] =$rr;
	     	}
$comct=count($arr);
//echo $comct;exit;
return $comct;


}



 function updateviewstatus($preqid,$key)
 {
 	$id=keytoid("login","lkey",$key);
 	 	// echo $id;exit();

 	$qry="update message set view_status='1' where planreqid='".$preqid."' && recieverid='".$id."'";
 	$exe=mysql_query($qry);

 }

 function updateviewcomstatus($pid,$key)
 {
 	$id=keytoid("planreq","rkey",$pid);
 	// echo $id;exit();
 	$rid=keytoid("login","lkey",$key);
 	 	// echo $rid;exit();

 	$qry="update message set view_status='1' where planreqid='".$id."' && recieverid='".$rid."'";
 	$exe=mysql_query($qry);
return;
 }
















 // function  companyreqview($key)
	// {
	// 	$id=keytoid("login","lkey",$key);
	// 	$qry="select * from planreq inner join company_reg on company_reg.id=planreq.companyid inner join customer_reg
	// 	on customer_reg.loginid=planreq.loginid where company_reg.loginid='".$id."'";
	// 	// echo $qry;exit;
	// 	$exe=mysql_query($qry);
	// 	$arr=array();
	// 	while($rr=mysql_fetch_array($exe))
	// 	{
	// 	$arr[]=$rr;
	//     }
	//     return $arr;
	// }


















//  function viewreq($key)
// {
// 	 $id=keytoid("login","lkey",$key);
// 	 $qry = "select *,company_reg.loginid as cmid,planreq.id as pid from planreq  inner join company_reg on company_reg.id=planreq.companyid  where planreq.loginid ='".$id."'";
// 	 $exe=mysql_query($qry);
// 	 $arr =array();
// 	 while($rr=mysql_fetch_array($exe))
// 	 {
// 	 	$qry1= "select count(id) from message where message.planreqid ='".$rr['pid']."' && view_status='0'";
// 	 	$exe1=mysql_query($qry1);
// 	 	$arr1 = null;	
// 	 	while($rr1=mysql_fetch_array($exe1))
// 	     {
// 	     	$arr1 = $rr1['count(id)'];
// 	     	$rr['mcount'] = $arr1;
// 	     }
// 	     $arr[] = $rr;

// 	 }
// 	return $arr;
// }
}
?>