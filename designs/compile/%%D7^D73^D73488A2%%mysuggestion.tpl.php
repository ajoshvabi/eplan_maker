<?php /* Smarty version 2.6.26, created on 2022-09-25 20:50:13
         compiled from mysuggestion.tpl */ ?>
<!DOCTYPE html>
<head> <title>My Suggestion</title> </head>
<body>
     <div class="container-xxl py-6">
    <center>
        My Suggestion
   <table class="table table-striped">
    <tr>
        <th>my suggestion</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <?php $_from = $this->_tpl_vars['viewsug']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
        <th><?php echo $this->_tpl_vars['a']['suggestion']; ?>
<th>
        <td><a href="editmysuggestion.php?key=<?php echo $this->_tpl_vars['a']['rkey']; ?>
" class="btn btn-primary">Edit</a></td>
        <td><a href="deletemysuggestion.php?key=<?php echo $this->_tpl_vars['a']['rkey']; ?>
" class="btn btn-danger">Delete</a></td>
    </tr>
        <?php endforeach; endif; unset($_from); ?>
            
</table>
</center>
</div>
</body>
</html>