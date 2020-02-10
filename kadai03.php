<?php
$name = "yamazaki";
if ($name == "yamazaki") {
 echo '私はヤマザキです';
} else {
 echo 'ヤマザキではありません';
}

$total = 0;
for($i = 0; $i < 1000; $i++) {
  $total += $i; 
}
echo $total;

$fruits = array("apple", "orange", "lemon", "cherry", "banana");
echo count($fruits);
for ($i = 0; $i < count($fruits); $i++) {
 echo "要素は" . $fruits[$i];
 echo "\n";
}

$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
 if($i % 5 == 0){
  echo $i;
 }
}