<!doctype html>
<html lang="en">
  <head>
  	<title>View Requirement</title>
 
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-striped">
						  <thead>
						    <tr>
						    	<th>Company Name</th>
						      <th>Building Type</th>
						      <th>Model</th>
						      <th>No Rooms</th>
						      <th>Other Requirement</th>
						      <th>Service charge</th>
						      <th>Quote</th>
						      <th></th>
						  </tr>
						     
						    </tr>


						  </thead>
						  
						  
						  <tbody>
						  	{foreach from=$view item="a"}
						  	{if $view !=''}
						  	<tr>
						  		<td>{$a.company_name}</td>
						      <td>{$a.buildingtype}</td>
						      <td>{$a.model}</td>
						      <td>{$a.rooms}</td>
						      <td>{$a.otherreq}</td>
						      <td>{$a.tamount}</td>
						       {if $a.quote !=''}
						      <td>
						      	<img src='uploads/{$a.rkey}/{$a.quote}' height="50px" weight="50px"><br><a href='uploads/{$a.rkey}/{$a.quote}' download target="_blank">Download Quote</a></td>

						      	{else}
						      	<td>No quote available</td>
						      	{/if}
						      	{if  $a.status==0}
						   	    <td><a href="reqedit.php?key={$a.rkey}" class="btn btn-success">Edit</a></td>
						     	{/if}

						    {if $a.quote !='' &&  $a.status==1} 
						    {if $a.pstatus==0}
                            <td><a href="payment.php?key={$a.rkey}&&tamount={$a.tamount}&&cid={$a.companyid}" class="btn btn-success">Half Payment</a></td>
                            {else}
                            <td>payed</td>
                            {/if}
                            {/if}


                            {if $a.quote !='' &&  $a.status==0}
						    <td><a href="approvecomreply.php?key={$a.rkey}" class="btn btn-success">Approve</a></td>
                            {/if}

                            {if $a.design !=''}
						    <td><img src='uploads/{$a.rkey}/{$a.design}' height="50px" weight="50px"><br><a href='uploads/{$a.rkey}/{$a.design}' download target="_blank">Download Design</a></td>
						    {if $a.pstatus!=2}
						    {if $a.suggestion ==''}
						    <td><a href="addsuggestion.php?key={$a.rkey}" class="btn btn-success">Add Suggestion</a>
						    	{else}
						    <td><a href="mysuggestion.php?key={$a.rkey}" class="btn btn-success">My Suggestion</a></td>
						    {/if}
						    {/if}

						    {if $a.acceptstatus==0}
						    <td><a href="approvedesign.php?key={$a.rkey}" class="btn btn-success">Approve </a></td>
						    {/if}
						    {if $a.acceptstatus==1}
						    {if $a.pstatus==1}
						    <td><a href="fpayment.php?key={$a.rkey}&&tamount={$a.tamount}&&cid={$a.companyid}" class="btn btn-success">Full Payment</a></td>
						   {/if}

						    {/if}
						    {if $a.pstatus==2}
						    <td>
						    Payed</td>
						    {/if}

						     <!-- <td><a href="message.php?comid={$a.cmid}&&planid={$a.rkey}" class="btn btn-success">Message({$a.countmessage})</a></td> -->
					<!-- 	     <td><a href="message.php?key2={$a.rkey}" class="btn btn-success">Message</a></td> -->
					 <td><a href="message.php?comid={$a.cmid}&&planid={$a.rkey}" class="btn btn-success">Message({$a.mcount})</a></td>

						    {/if}
						    




						      {else}
						      No Data Available
						      {/if}
						  </tr>
						     {/foreach}
						  </tbody>
						 
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	

	</body>
</html>

