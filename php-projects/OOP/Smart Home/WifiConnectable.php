<?php

trait WifiConnectable
{
    public function status() : string {
        return "Connected via Wifi";
    }
}