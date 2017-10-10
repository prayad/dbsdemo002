<?php
$items = array();
for($i=0;$i<10;$i++){
$items[$i]="This message $i";
header{'content-Type: application/json');
$jasonOutput=json_encode($items);
echo $jsonOutput;
