<html>
<head> <title> Search </title> </head>
<body>
	<center>
<table>
	<form method="POST">
		<tr>
			<input type="hidden" name="hide" value="h">
			<td>Search company</td>
			<td><input type="text" name="search" class="form-control mt-3"></td>
			<td><input type="submit" name="submit" value="Search" class="btn btn-success mt-3"></td>
		</tr>
	</form>
</table>
<br>
<table border="1">
	<form method="post" action="">
		{foreach from=$data item="a"}
		<tr>
			<th>Company name</th>
			<th>District</th>
			<th>City</th>
		</tr>
		
		<tr>
			<td>{$a.company_name}</td>
			<td>{$a.district}</td>
			<td>{$a.city}</td>
			<td><a href="planreq.php?key={$a.ckey}">Plan Request</a></td>
		</tr>
		{/foreach}
	</form>
</table>

</center>
</body>
</html>