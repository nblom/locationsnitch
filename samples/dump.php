<?php
ini_set('error_log','dump.log');

ob_start();
echo '$_REQUEST:';
var_dump($_REQUEST);
$debug = ob_get_contents();
ob_end_clean();
error_log($debug);

echo 'Updated: '.date('Y-m-d H:i:s');
echo "\n";
echo 'Updated by: '.$_SERVER['REMOTE_ADDR'];
echo "\n";
echo "Longitude: ".$_REQUEST['long'];
echo "\n";
echo "Latitude: ".$_REQUEST['lat'];
echo "\n";
echo "Device name: ".$_REQUEST['device'];
echo "\n";
