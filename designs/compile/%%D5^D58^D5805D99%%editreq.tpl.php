<?php /* Smarty version 2.6.26, created on 2022-07-19 19:34:20
         compiled from editreq.tpl */ ?>

<html>
<head> <title> Edit Requirement </title> </head>
<body>
	<center>
		
<table>
	<?php $_from = $this->_tpl_vars['req']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
	<form method="post">
	
		<input type="hidden" name="hide" value="h" class="form-control mt-3">
		<tr>
			<td>BUILDING TYPE</td>
		   <td><input type="text" name="buildingtype" value= "<?php echo $this->_tpl_vars['s']['buildingtype']; ?>
" class="form-control mt-3" boa></td>
		</tr>
		<tr>
		   <td>MODEL</td>
		   <td><input type="text" name="model" value="<?php echo $this->_tpl_vars['s']['model']; ?>
" class="form-control mt-3"></td>
		</tr>
		  <tr>
		  	<td> NO OF ROOMS</td>
		  	<td><input type="text" name="noofrooms" value="<?php echo $this->_tpl_vars['s']['rooms']; ?>
" class="form-control mt-3"></td>
		  </tr>
		  <tr>
		  	<td> OTHER REQUIREMENTS</td>
		  	<td><textarea name="otherrequirements" class="form-control mt-3"><?php echo $this->_tpl_vars['s']['otherreq']; ?>
</textarea></td>
		</tr>
		<tr>
				<td></td>
			<td><input type="submit" name="submit" value="submit" class="btn btn-success mt-3"></td>
		</tr>
	</form>
	<?php endforeach; endif; unset($_from); ?>

</table>
</center>
</body>
</html>