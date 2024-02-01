<?php /* Smarty version 2.6.26, created on 2022-09-25 20:57:50
         compiled from complaintview.tpl */ ?>
<!DOCTYPE html>
<head>
	<title></title>
</head>
<body>
     <div class="container-xxl py-6">
<table class="table table-striped">
<tr>
	<th>Complaint view</th>
	<th>Date</th>
	<th>Reply</th>
	
</tr>
<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
 <tr>
 <td><?php echo $this->_tpl_vars['a']['complaint']; ?>
</td>
 <td><?php echo $this->_tpl_vars['a']['date']; ?>
</td>
 <td><?php echo $this->_tpl_vars['a']['reply']; ?>
</td>

 <?php if ($this->_tpl_vars['a']['reply'] == NULL): ?>
  <td><a href="complaintedit.php?key=<?php echo $this->_tpl_vars['a']['comkey']; ?>
" class="btn btn-success">Edit</a></td>
   <td><a href="deletecomplaint.php?key=<?php echo $this->_tpl_vars['a']['comkey']; ?>
" class="btn btn-danger">Delete</a></td>
   <?php endif; ?>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
</div>

</body>
</html>