<?php
require '../src/Wcs/Hello.php';
use App\Wcs\Hello;

$greeting = new Hello();
echo $greeting->talk();