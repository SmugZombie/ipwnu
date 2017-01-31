<?php
echo "Current Users: <pre>";
echo shell_exec("cat /etc/passwd");
echo "</pre>";

