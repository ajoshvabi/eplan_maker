<html>
<head> <title> View Requirement </title> </head>
<body>
	<center>
<table border="1">
	<h2><u> VIEW REQUIREMENTS </u></h2>
	<tr>
		<td>BUILDING TYPE</td>
	    <td>MODEL</td>
	    <td>NO OF ROOMS</td>
        <td>OTHER REQUIREMENTS</td>
    </tr>
    
    {foreach from=$view item="a"}
    <tr>
    	
    	<td>{$a.buildingtype}</td>
        <td>{$a.model}</td>
        <td>{$a.rooms}</td>
        <td>{$a.otherreq}</td>
        <td><a href="reqedit.php?key={$a.rkey}">Edit</a></td>

    </tr>
    		
{/foreach}	
</table>
</center>
</body>
</html>