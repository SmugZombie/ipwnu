<?php
echo "Current Directory: ".shell_exec("pwd")."<pre>";
echo shell_exec("ls -larth");
echo "</pre>";

echo "One Level Above: ".shell_exec("cd ../; pwd;")."<pre>";
echo shell_exec("cd ../; ls -larth;");
echo "</pre>";


