<?php /* Smarty version 2.6.26, created on 2022-09-12 17:11:48
         compiled from search.tpl */ ?>
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
    
                           <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>  
                        <?php if (a != null): ?>  
                            <tr>
                             <th>Company name</th>
                             <th>District</th>
                             <th>City</th>
                            </tr>
                          
                    
                       
                            <tr>
                            
                             <td><?php echo $this->_tpl_vars['a']['company_name']; ?>
</td>
                             <td><?php echo $this->_tpl_vars['a']['district']; ?>
</td>
                             <td><?php echo $this->_tpl_vars['a']['city']; ?>
</td>
                              <td><a href="planreq.php?key=<?php echo $this->_tpl_vars['a']['ckey']; ?>
" class="btn btn-success">Plan Request</a></td>
                            </tr>

                            
                        
                       
                            <?php endif; ?>
                               <?php endforeach; endif; unset($_from); ?>
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
                                         <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>  
                        <?php if (a != null): ?>
                                        <tbody>
                                            <tr>
                            
                             <td><?php echo $this->_tpl_vars['a']['company_name']; ?>
</td>
                             <td><?php echo $this->_tpl_vars['a']['district']; ?>
</td>
                             <td><?php echo $this->_tpl_vars['a']['city']; ?>
</td>
                              <td><a href="planreq.php?key=<?php echo $this->_tpl_vars['a']['ckey']; ?>
" class="btn btn-success">Plan Request</a></td>
                            </tr>
                               <?php endif; ?>
                               <?php endforeach; endif; unset($_from); ?>
                           
                                            
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