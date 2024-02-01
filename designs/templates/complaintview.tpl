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
{foreach from=$view item="a"}
 <tr>
 <td>{$a.complaint}</td>
 <td>{$a.date}</td>
 <td>{$a.reply}</td>

 {if $a.reply == NULL}
  <td><a href="complaintedit.php?key={$a.comkey}" class="btn btn-success">Edit</a></td>
   <td><a href="deletecomplaint.php?key={$a.comkey}" class="btn btn-danger">Delete</a></td>
   {/if}
</tr>
{/foreach}
</table>
</div>

</body>
</html>