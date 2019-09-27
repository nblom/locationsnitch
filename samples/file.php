<?php


file_put_contents('file.csv', date('Y-m-d H:i:s').','.$_SERVER['REMOTE_ADDR'].','.$_REQUEST['long'].','.$_REQUEST['lat'].','.$_REQUEST['device']."\n", FILE_APPEND);


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
