<?php
$key = "BID-";
$year = date("Y");
$month = date("m");
$day = date("d");
$letter = chr(rand(65,90));
$ticket=rand(1000,9999);
$fnl=$key.$year.$month.$day.$letter.$ticket;
echo "$fnl" ;