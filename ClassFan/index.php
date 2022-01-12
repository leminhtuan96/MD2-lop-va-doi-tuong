<?php
include_once "fan.php";
$fan1 = new fan();
$fan1->setSpeed($fan1->getFAST());
$fan1->setRadius(10);
$fan1->setColor("yellow");
$fan1->setOn(true);
$fan2 = new fan();
$fan2->setSpeed($fan2->getMEDIUM());
echo $fan1->toString();
echo "<br>";
echo $fan2->toString();
