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
        {foreach from=$viewsug item="a"}
        <th>{$a.suggestion}<th>
        <td><a href="editmysuggestion.php?key={$a.rkey}" class="btn btn-primary">Edit</a></td>
        <td><a href="deletemysuggestion.php?key={$a.rkey}" class="btn btn-danger">Delete</a></td>
    </tr>
        {/foreach}
            
</table>
</center>
</div>
</body>
</html>