<?php /* Smarty version 2.6.26, created on 2022-08-30 16:34:48
         compiled from companyreg.tpl */ ?>
<html>
<head> <title> registration </title> </head>
<body>
	<center>
	<table>
	<form method="POST" action="">
		
			<input type="hidden" name="hide" value="h">
			<tr><td>Company Name</td>
				<td><input type="text" name="companyname" class="form-control mt-3"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><textarea name="address" class="form-control mt-3"></textarea></td>
			</tr>
			<tr>
				<td>Pincode</td>
				<td><input type="text" name="pincode" class="form-control mt-3"></td>
			</tr>
			<tr>
				<td>District</td>
				<td>
				<select name="district" class="form-control mt-3">
				<option>Thiruvananthapuram</option>
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
				<td><input type="text" name="city" class="form-control mt-3"></td>
			</tr>
			<tr>
				<td>Contact No</td>
				<td><input type="text" name="contactno" class="form-control mt-3"></td>
			</tr>
			<tr>
				<td>Email</td><td> <input type="email" name ="email" class="form-control mt-3"></td>
			</tr>
		    <tr>
		    	<td>Password</td>
		    	<td> <input type="password" name="password" class="form-control mt-3"></td>
		    </tr>
			<tr>
				<td></td><td><input type="submit" value="Register" class="btn btn-success mt-3"></td></tr>

	</form>
</table>
</center>
</body>
</html>