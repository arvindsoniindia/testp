
<?php
 $ipaddress = getenv("REMOTE_ADDR") ;
 Echo "Good Luck ";



$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = $ipaddress;
fwrite($myfile, "\n". $txt);
fclose($myfile);


?>