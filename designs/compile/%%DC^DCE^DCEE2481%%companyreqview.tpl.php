<?php /* Smarty version 2.6.26, created on 2022-10-13 20:16:58
         compiled from companyreqview.tpl */ ?>
<html>
<head> <title> View Requirement </title> </head>
<body>
	<center>
<table class="table table-striped">
	<tr>
        <th>NAME</th>
		<th>BUILDING TYPE</th>
	    <th>MODEL</th>
	    <th>NO OF ROOMS</th>
        <th>OTHER REQUIREMENTS</th>
        <th></th>
        <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>

    </tr>
    
    <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
    <tr >
    	<td><?php echo $this->_tpl_vars['a']['name']; ?>
</td>
    	<td><?php echo $this->_tpl_vars['a']['buildingtype']; ?>
</td>
        <td><?php echo $this->_tpl_vars['a']['model']; ?>
</td>
        <td><?php echo $this->_tpl_vars['a']['rooms']; ?>
</td>
        <td><?php echo $this->_tpl_vars['a']['otherreq']; ?>
</td>
        <!-- <?php if ($this->_tpl_vars['a']['status'] != 1): ?> -->
        <td><a href="reqrespond.php?key=<?php echo $this->_tpl_vars['a']['rkey']; ?>
" class="btn btn-primary">Upload Quote</a>
            <td>
             <!--    <?php endif; ?>
                           -->         <?php if ($this->_tpl_vars['a']['status'] == 0): ?>
                           <td>
                                    Waiting</td>
                                    <?php elseif ($this->_tpl_vars['a']['status'] == 1): ?>
                                    <td>
                                    Approved</td>
                                    <?php endif; ?>
                                     <!--<?php if ($this->_tpl_vars['a']['status'] == 0): ?>
                                    Waiting
                                    <?php elseif ($this->_tpl_vars['a']['status'] == 1): ?>
                                    <a href="adddesign.php?key=<?php echo $this->_tpl_vars['a']['rkey']; ?>
" class="btn btn-primary">Design</a>
                                    <?php endif; ?>-->

                                </td>
                                 <td>
                                    <?php if ($this->_tpl_vars['a']['pstatus'] == 1): ?>
                                    Half Payment Completed
                                    <?php endif; ?>
                                </td>
                               <td>
                                    <?php if ($this->_tpl_vars['a']['status'] == 1): ?>
                                    <?php if ($this->_tpl_vars['a']['acceptstatus'] == 0): ?>
                                    <a href="adddesign.php?key=<?php echo $this->_tpl_vars['a']['rkey']; ?>
" class="btn btn-primary">Upload Plan</a>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                </td>
                                <td><?php if ($this->_tpl_vars['a']['design'] != null): ?>
                                    <?php echo $this->_tpl_vars['a']['suggestion']; ?>

                                    <?php endif; ?>
                                    
                                </td>

                                <td>
                                    <?php if ($this->_tpl_vars['a']['pstatus'] == 2): ?>
                                    Payment completed
                                    <?php else: ?>
                                    Payment pending
                                    <?php endif; ?>
                                </td>  
                                <td>
                                    <a href="companymessageview.php?key1=<?php echo $this->_tpl_vars['a']['rkey']; ?>
&&lid=<?php echo $this->_tpl_vars['a']['loginid']; ?>
" class="nav-item nav-link">Message(<?php echo $this->_tpl_vars['a']['mcount']; ?>
)</a>
                                   <!-- <td><a href="companymessageview.php?comid=<?php echo $this->_tpl_vars['a']['cmid']; ?>
" class="nav-item nav-link">Message</a></td -->
                                </td>
                                   
                                    
    </tr>
    		
<?php endforeach; endif; unset($_from); ?>	
</table>
</center>
</body>
</html>