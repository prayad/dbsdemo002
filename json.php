<?php
$items = array();
for($i=0;$i<10;$i++){
$items[$i]="This message $i";}
header('content-Type: application/json');
$jasonOutput=json_encode($items);echo "# test1" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/prayad/test1.git
git push -u origin master
echo $jsonOutput;
