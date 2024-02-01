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
    
    {foreach from=$view item="a"}
    <tr >
    	<td>{$a.name}</td>
    	<td>{$a.buildingtype}</td>
        <td>{$a.model}</td>
        <td>{$a.rooms}</td>
        <td>{$a.otherreq}</td>
        <!-- {if $a.status!=1} -->
        <td><a href="reqrespond.php?key={$a.rkey}" class="btn btn-primary">Upload Quote</a>
            <td>
             <!--    {/if}
                           -->         {if $a.status==0}
                           <td>
                                    Waiting</td>
                                    {elseif $a.status==1}
                                    <td>
                                    Approved</td>
                                    {/if}
                                     <!--{if $a.status==0}
                                    Waiting
                                    {elseif $a.status==1}
                                    <a href="adddesign.php?key={$a.rkey}" class="btn btn-primary">Design</a>
                                    {/if}-->

                                </td>
                                 <td>
                                    {if $a.pstatus==1}
                                    Half Payment Completed
                                    {/if}
                                </td>
                               <td>
                                    {if $a.status==1}
                                    {if $a.acceptstatus==0}
                                    <a href="adddesign.php?key={$a.rkey}" class="btn btn-primary">Upload Plan</a>
                                    {/if}
                                    {/if}
                                </td>
                                <td>{if $a.design!=null}
                                    {$a.suggestion}
                                    {/if}
                                    
                                </td>

                                <td>
                                    {if $a.pstatus==2}
                                    Payment completed
                                    {else}
                                    Payment pending
                                    {/if}
                                </td>  
                                <td>
                                    <a href="companymessageview.php?key1={$a.rkey}&&lid={$a.loginid}" class="nav-item nav-link">Message({$a.mcount})</a>
                                   <!-- <td><a href="companymessageview.php?comid={$a.cmid}" class="nav-item nav-link">Message</a></td -->
                                </td>
                                   
                                    
    </tr>
    		
{/foreach}	
</table>
</center>
</body>
</html>