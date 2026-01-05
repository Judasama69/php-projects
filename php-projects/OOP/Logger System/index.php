<?php


include_once 'Logger.php';
include_once 'UserManager.php';

$myLogger = new Logger();
$user = new UserManager($myLogger);
$user->createUser("Kenjie");
