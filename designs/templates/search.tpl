<html>
<head> <title> Search </title> </head>
<body>
	<center>
<table>
	<form method="POST">
		<tr>
			<input type="hidden" name="hide" value="h">
			<td>Search company<td></td></td>
			<td><input type="text" name="search" class="form-control mt-3"></td></tr>
      <tr>
			<td><input type="submit" name="submit" value="Search" class="btn btn-success mt-3"></td>
    </tr>
		</tr>
	</form>
</table>
<br>

	<form method="post" action="">
		<!-- <table class="table table-striped">
    
                           {foreach from=$data item="a"}  
                        {if a != null}  
                            <tr>
                             <th>Company name</th>
                             <th>District</th>
                             <th>City</th>
                            </tr>
                          
                    
                       
                            <tr>
                            
                             <td>{$a.company_name}</td>
                             <td>{$a.district}</td>
                             <td>{$a.city}</td>
                              <td><a href="planreq.php?key={$a.ckey}" class="btn btn-success">Plan Request</a></td>
                            </tr>

                            
                        
                       
                            {/if}
                               {/foreach}
                        </table> -->


                         <div class="container-fluid">
                           
                <div class="row">

                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="card-title">Data Table</h4> -->

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                          
                                           <tr>
                             <th>Company name</th>
                             <th>District</th>
                             <th>City</th>
                            </tr>
                                        </thead>
                                         {foreach from=$data item="a"}  
                        {if a != null}
                                        <tbody>
                                            <tr>
                            
                             <td>{$a.company_name}</td>
                             <td>{$a.district}</td>
                             <td>{$a.city}</td>
                              <td><a href="planreq.php?key={$a.ckey}" class="btn btn-success">Plan Request</a></td>
                            </tr>
                               {/if}
                               {/foreach}
                           
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                               <th>Company name</th>
                             <th>District</th>
                             <th>City</th>
                         </tr>
                                        </tfoot>
                                      
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</form>


</center>
</body>
</html>