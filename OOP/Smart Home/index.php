<?php
require_once 'SmartLight.php';

$bulb = new SmartLight();

echo "<h3>Smart Light Dashboard</h3>";

echo "Connection: " . $bulb->status() . "<br>";
echo "Logs: " . $bulb->logStatus() . "<br>";
echo "Status: " . $bulb->turnOn();
