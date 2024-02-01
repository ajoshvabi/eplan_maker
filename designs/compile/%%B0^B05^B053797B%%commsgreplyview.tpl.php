<?php /* Smarty version 2.6.26, created on 2022-08-21 18:49:42
         compiled from commsgreplyview.tpl */ ?>

<!DOCTYPE html>
<head>
  <title></title>
</head>
<body>
<table class="table table-striped">
<tr>
  <th>Name</th>
  <th>Message</th>
  <th>Date</th>
  <th>Time</th>
  <th></th>
  
</tr>
<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
 <tr>
 <td><?php echo $this->_tpl_vars['a']['company_name']; ?>
</td>
 <td><?php echo $this->_tpl_vars['a']['message']; ?>
</td>
 <td><?php echo $this->_tpl_vars['a']['cdate']; ?>
</td>
  <td><?php echo $this->_tpl_vars['a']['ctime']; ?>
</td>
 <!--  <td><a href="commsgreply.php?c0sid=<?php echo $this->_tpl_vars['a']['cosid']; ?>
" class="btn btn-success">Reply</a></td>
 -->
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>

</body>
</html>