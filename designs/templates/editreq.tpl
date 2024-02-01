
<html>
<head> <title> Edit Requirement </title> </head>
<body>
	<center>
		
<table>
	{foreach from=$req item="s"}
	<form method="post">
	
		<input type="hidden" name="hide" value="h" class="form-control mt-3">
		<tr>
			<td>BUILDING TYPE</td>
		   <td><input type="text" name="buildingtype" value= "{$s.buildingtype}" class="form-control mt-3" boa></td>
		</tr>
		<tr>
		   <td>MODEL</td>
		   <td><input type="text" name="model" value="{$s.model}" class="form-control mt-3"></td>
		</tr>
		  <tr>
		  	<td> NO OF ROOMS</td>
		  	<td><input type="text" name="noofrooms" value="{$s.rooms}" class="form-control mt-3"></td>
		  </tr>
		  <tr>
		  	<td> OTHER REQUIREMENTS</td>
		  	<td><textarea name="otherrequirements" class="form-control mt-3">{$s.otherreq}</textarea></td>
		</tr>
		<tr>
				<td></td>
			<td><input type="submit" name="submit" value="submit" class="btn btn-success mt-3"></td>
		</tr>
	</form>
	{/foreach}

</table>
</center>
</body>
</html>