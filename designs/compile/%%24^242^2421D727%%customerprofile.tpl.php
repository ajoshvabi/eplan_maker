<?php /* Smarty version 2.6.26, created on 2022-08-23 21:53:27
         compiled from customerprofile.tpl */ ?>
<!-- <html>
<head> <title> customerreg</title> </head>
<body>
	<center>
	<table class="table table-stripped">
	<form method="POST" action="">
		<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>	
		
			<input type="hidden" name="hide" value="h">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value= "<?php echo $this->_tpl_vars['a']['name']; ?>
" class="form-control mt-3"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><textarea name="address" class="form-control mt-3">
				<?php echo $this->_tpl_vars['a']['address']; ?>

				</textarea></td>
			</tr>
			<tr>
				<td>Contact No</td>
				<td><input type="text" name="contactno" value="<?php echo $this->_tpl_vars['a']['contactno']; ?>
" class="form-control mt-3"></td>
			</tr>
			<tr>
				<td>District</td>
				<td>
				<select name="district" class="form-control mt-3">
				<option><?php echo $this->_tpl_vars['a']['district']; ?>
</option>
				<option >Thiruvananthapuram</option>
				<option>Kollam</option>
				<option>Pathanamthitta</option>
				<option>Alapuzha</option>
				<option>Kottayam</option>
				<option>Idukki</option>
				<option>Eranakulam</option>
                <option>Thrissur</option>
				<option>Palakkad</option>
				<option>Malappuram</option>
				<option>Kozhikkod</option>
				<option>Vayanad</option>
				<option>Kannur</option>
				<option>Kasargod</option>
                </select></td>
            </tr>
			<tr>
				<td>City</td>
				<td><input type="text" name="city" value="<?php echo $this->_tpl_vars['a']['city']; ?>
" class="form-control mt-3"></td>
			</tr>
			
			<tr>
				<td>Email</td><td> <input type="email" name ="email" value="<?php echo $this->_tpl_vars['a']['email']; ?>
" class="form-control mt-3"></td>
			</tr>
		    
			<tr>
				<td></td><td><input type="submit" value="Edit" class="btn btn-success mt-3"></td>
			</tr>
				<?php endforeach; endif; unset($_from); ?>

	</form>
</table>
</center>
</body>
</html> -->




<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.themefisher.com/quixlab/app-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Apr 2022 16:10:03 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="user/css/style.css" rel="stylesheet">

</head>

<body>

    <div id="main-wrapper">

        

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-1 col-xl-1">
                         
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="" class="form-profile">
                                    <div class="form-group">




<div class="media align-items-center mb-5">
                                    <img class="mr-3" src="user/img/profile.png" width="80" height="80" alt="">
                                    <div class="media-body">

                                <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>	
                                        <h3 class="mb-0"><?php echo $this->_tpl_vars['a']['name']; ?>
</h3>
                                        <p class="text-muted mb-0"><?php echo $this->_tpl_vars['a']['city']; ?>
</p>
                                        <!-- <?php endforeach; endif; unset($_from); ?> -->
                                    </div>
                                </div>

                                    	<!-- <form method="POST" action=""> -->
		<!-- <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>	 -->
		
			<input type="hidden" name="hide" value="h">
			<tr>
				<h6><td>Name</td></h6>
				<td><input type="text" name="name" value= "<?php echo $this->_tpl_vars['a']['name']; ?>
" class="form-control mt-3"></td>
			</tr>
			<br>

			<tr>
				<h6><td>Address</td></h6>
				<td><textarea name="address" class="form-control mt-3">
				<?php echo $this->_tpl_vars['a']['address']; ?>

				</textarea></td>
			</tr>
			<br>

			<tr>
				<h6><td>Contact No</td></h6>
				<td><input type="text" name="contactno" value="<?php echo $this->_tpl_vars['a']['contactno']; ?>
" class="form-control mt-3"></td>
			</tr>
			<br>

			<tr>
				<h6><td>District</td></h6>
				<td>
				<select name="district" class="form-control mt-3">
				<option><?php echo $this->_tpl_vars['a']['district']; ?>
</option>
				<option >Thiruvananthapuram</option>
				<option>Kollam</option>
				<option>Pathanamthitta</option>
				<option>Alapuzha</option>
				<option>Kottayam</option>
				<option>Idukki</option>
				<option>Eranakulam</option>
                <option>Thrissur</option>
				<option>Palakkad</option>
				<option>Malappuram</option>
				<option>Kozhikkod</option>
				<option>Vayanad</option>
				<option>Kannur</option>
				<option>Kasargod</option>
                </select></td>
            </tr>
            <br>

			<tr>
				<h6><td>City</td></h6>
				<td><input type="text" name="city" value="<?php echo $this->_tpl_vars['a']['city']; ?>
" class="form-control mt-3"></td>
			</tr>
			<br>

			
			<tr>
				<h6><td>Email</td></h6><td> <input type="email" name ="email" value="<?php echo $this->_tpl_vars['a']['email']; ?>
" class="form-control mt-3"></td>
			</tr>
			<br>

		    
			<tr>
				<td></td><td><input type="submit" value="Edit" class="btn btn-success mt-3"></td>
			</tr>

<br>
<br>
<br>

			<h4>About Me</h4>
                                <!-- <p class="text-muted">Hi, I'm <?php echo $this->_tpl_vars['a']['name']; ?>
, a user.</p> -->
                                <ul class="card-profile__info">
                                    <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span><?php echo $this->_tpl_vars['a']['contactno']; ?>
</span></li>
                                    <li><strong class="text-dark mr-4">Email</strong> <span><?php echo $this->_tpl_vars['a']['email']; ?>
</span></li>
                                </ul>
				<?php endforeach; endif; unset($_from); ?>

                                    </div>
                                </form>
                            </div>
                        </div>

        <div class="footer">
           
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="user/plugins/common/common.min.js"></script>
    <script src="user/js/custom.min.js"></script>
    <script src="user/js/settings.js"></script>
    <script src="user/js/gleek.js"></script>
    <script src="user/js/styleSwitcher.js"></script>

<user/


<!-- Mirrored from demo.themefisher.com/quixlab/app-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Apr 2022 16:10:06 GMT -->
</html>