<?php
require_once 'WifiConnectable.php';
require_once 'Loggable.php';

class SmartLight
{
    use WifiConnectable, Loggable {
        WifiConnectable::status insteadof Loggable;

        Loggable::status as LogStatus;
    }

    public function turnOn(): string
    {
        return "The light is now bright";
    }
}