<?php /* Smarty version 2.6.26, created on 2022-10-13 20:28:30
         compiled from viewreq.tpl */ ?>
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
						  	<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
						  	<?php if ($this->_tpl_vars['view'] != ''): ?>
						  	<tr>
						  		<td><?php echo $this->_tpl_vars['a']['company_name']; ?>
</td>
						      <td><?php echo $this->_tpl_vars['a']['buildingtype']; ?>
</td>
						      <td><?php echo $this->_tpl_vars['a']['model']; ?>
</td>
						      <td><?php echo $this->_tpl_vars['a']['rooms']; ?>
</td>
						      <td><?php echo $this->_tpl_vars['a']['otherreq']; ?>
</td>
						      <td><?php echo $this->_tpl_vars['a']['tamount']; ?>
</td>
						       <?php if ($this->_tpl_vars['a']['quote'] != ''): ?>
						      <td>
						      	<img src='uploads/<?php echo $this->_tpl_vars['a']['rkey']; ?>
/<?php echo $this->_tpl_vars['a']['quote']; ?>
' height="50px" weight="50px"><br><a href='uploads/<?php echo $this->_tpl_vars['a']['rkey']; ?>
/<?php echo $this->_tpl_vars['a']['quote']; ?>
' download target="_blank">Download Quote</a></td>

						      	<?php else: ?>
						      	<td>No quote available</td>
						      	<?php endif; ?>
						      	<?php if ($this->_tpl_vars['a']['status'] == 0): ?>
						   	    <td><a href="reqedit.php?key=<?php echo $this->_tpl_vars['a']['rkey']; ?>
" class="btn btn-success">Edit</a></td>
						     	<?php endif; ?>

						    <?php if ($this->_tpl_vars['a']['quote'] != '' && $this->_tpl_vars['a']['status'] == 1): ?> 
						    <?php if ($this->_tpl_vars['a']['pstatus'] == 0): ?>
                            <td><a href="payment.php?key=<?php echo $this->_tpl_vars['a']['rkey']; ?>
&&tamount=<?php echo $this->_tpl_vars['a']['tamount']; ?>
&&cid=<?php echo $this->_tpl_vars['a']['companyid']; ?>
" class="btn btn-success">Half Payment</a></td>
                            <?php else: ?>
                            <td>payed</td>
                            <?php endif; ?>
                            <?php endif; ?>


                            <?php if ($this->_tpl_vars['a']['quote'] != '' && $this->_tpl_vars['a']['status'] == 0): ?>
						    <td><a href="approvecomreply.php?key=<?php echo $this->_tpl_vars['a']['rkey']; ?>
" class="btn btn-success">Approve</a></td>
                            <?php endif; ?>

                            <?php if ($this->_tpl_vars['a']['design'] != ''): ?>
						    <td><img src='uploads/<?php echo $this->_tpl_vars['a']['rkey']; ?>
/<?php echo $this->_tpl_vars['a']['design']; ?>
' height="50px" weight="50px"><br><a href='uploads/<?php echo $this->_tpl_vars['a']['rkey']; ?>
/<?php echo $this->_tpl_vars['a']['design']; ?>
' download target="_blank">Download Design</a></td>
						    <?php if ($this->_tpl_vars['a']['pstatus'] != 2): ?>
						    <?php if ($this->_tpl_vars['a']['suggestion'] == ''): ?>
						    <td><a href="addsuggestion.php?key=<?php echo $this->_tpl_vars['a']['rkey']; ?>
" class="btn btn-success">Add Suggestion</a>
						    	<?php else: ?>
						    <td><a href="mysuggestion.php?key=<?php echo $this->_tpl_vars['a']['rkey']; ?>
" class="btn btn-success">My Suggestion</a></td>
						    <?php endif; ?>
						    <?php endif; ?>

						    <?php if ($this->_tpl_vars['a']['acceptstatus'] == 0): ?>
						    <td><a href="approvedesign.php?key=<?php echo $this->_tpl_vars['a']['rkey']; ?>
" class="btn btn-success">Approve </a></td>
						    <?php endif; ?>
						    <?php if ($this->_tpl_vars['a']['acceptstatus'] == 1): ?>
						    <?php if ($this->_tpl_vars['a']['pstatus'] == 1): ?>
						    <td><a href="fpayment.php?key=<?php echo $this->_tpl_vars['a']['rkey']; ?>
&&tamount=<?php echo $this->_tpl_vars['a']['tamount']; ?>
&&cid=<?php echo $this->_tpl_vars['a']['companyid']; ?>
" class="btn btn-success">Full Payment</a></td>
						   <?php endif; ?>

						    <?php endif; ?>
						    <?php if ($this->_tpl_vars['a']['pstatus'] == 2): ?>
						    <td>
						    Payed</td>
						    <?php endif; ?>

						     <!-- <td><a href="message.php?comid=<?php echo $this->_tpl_vars['a']['cmid']; ?>
&&planid=<?php echo $this->_tpl_vars['a']['rkey']; ?>
" class="btn btn-success">Message(<?php echo $this->_tpl_vars['a']['countmessage']; ?>
)</a></td> -->
					<!-- 	     <td><a href="message.php?key2=<?php echo $this->_tpl_vars['a']['rkey']; ?>
" class="btn btn-success">Message</a></td> -->
					 <td><a href="message.php?comid=<?php echo $this->_tpl_vars['a']['cmid']; ?>
&&planid=<?php echo $this->_tpl_vars['a']['rkey']; ?>
" class="btn btn-success">Message(<?php echo $this->_tpl_vars['a']['mcount']; ?>
)</a></td>

						    <?php endif; ?>
						    




						      <?php else: ?>
						      No Data Available
						      <?php endif; ?>
						  </tr>
						     <?php endforeach; endif; unset($_from); ?>
						  </tbody>
						 
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	

	</body>
</html>
