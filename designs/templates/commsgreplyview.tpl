
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
{foreach from=$view item="a"}
 <tr>
 <td>{$a.company_name}</td>
 <td>{$a.message}</td>
 <td>{$a.cdate}</td>
  <td>{$a.ctime}</td>
 <!--  <td><a href="commsgreply.php?c0sid={$a.cosid}" class="btn btn-success">Reply</a></td>
 -->
</tr>
{/foreach}
</table>

</body>
</html>