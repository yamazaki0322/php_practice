<?php
function sum($i){
    $result = $i * 2;
    return $result;
}
echo sum(9);
 echo "\n";
 
function f($a, $b){
   $result = $a + $b;
  return $result;
}
echo f(8, 9);
echo "\n";

$arr = array(1, 3, 5, 7, 9);
function summ($arr){
    $result = 1;
    foreach ($arr as $i){
     $result *= $i;   
    }
    return $result;
}
echo summ($arr);
echo "\n";

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
echo max_array($arr);
echo "\n";

$html_body = 'テスト<br><p>テスト</p><storong>テスト</storong>';
echo strip_tags($html_body);
echo "\n";

$fruits = ['apple', 'orange', 'melon'];
array_push($fruits, 'banana', 'pineapple');
echo count($fruits);
echo "\n";

$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array = array_merge($array1,$array2);
echo $array[5];
echo "\n";

echo '現在のUnixタイムスタンプ：'.time();
echo "\n";
//3日後のタイムスタンプを取得
$nweek = time() + (3 * 24 * 60 * 60);
echo '3日後のUnixタイムスタンプ：'.$nweek;
echo "\n";

$timestamp = mktime(0, 0, 0, 1, 1, 2020);
echo '2020年1月1日0時00分のUnixタイムスタンプ:' .$timestamp;
echo "\n";


echo date('Y/m/d');
echo '<br>';
 

echo date('Y-m-d H:i:s');
echo '<br>';
echo date('Y年m月d日 H時i分s秒');
echo '<br>';


