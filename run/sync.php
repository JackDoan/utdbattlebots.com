<?php

$command = escapeshellcmd('/var/www/utdbattlebots.com/assets/img/drive/sync.sh');
$output = shell_exec($command);
echo $output;
?>
