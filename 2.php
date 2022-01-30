<?php

function userConnect($db){

    return function($user) use ($db){
        echo $user . ' connected to the database ' .$db . '<br>';

    };
}

$db = userConnect('New Base');

$db('Masha');
$db('Petya');

$arr1 = array(5,2,4,3,1);
$arr2 = array(10,8,6,7,9,5,3,10);
rsort($arr1);
var_dump($arr1);
echo '<br>';


for($i=0; $i < count($arr1); $i++){
    echo $arr1[$i];
    echo '<br>';
}

print_r(array_merge($arr1, $arr2));
echo '<br>';
print_r(array_unique($arr2));
echo '<br>';

array_push($arr2,11,15);
print_r($arr2);
echo '<br>';
array_pop($arr2);
print_r($arr2);
echo '<br>';

function my_sort($a,$b)
{
if ($a==$b) return 0;
  return ($a>$b)?-1:1;
}

$a=array(4,2,8,6);
usort($a,"my_sort");

$arrlength=count($a);
for($x=0;$x<$arrlength;$x++)
{
  echo $a[$x];
  echo "<br>";
}
foreach($a as $key => $value){
    echo $value .'<br>';
}

$date = '01.01.2021';

echo 'day ' . substr($date, 0, 2) . '<br>';
echo strpos($date, '2021') . '<br>';
$date1 = str_replace('.',' ',$date);

echo $date1;
echo '<br>';
$c = "Vsem privet";
$date2 = str_replace(['[Vsem]', '[privet]'], ['[Hello]', '[everyone]'], $c);
echo $date2;
echo '<br>';
echo trim($c, 'V');
echo '<br>';
echo strlen($c);
echo '<br>';

$y = ["Alex"=>"Hello", "Mary"=>"Bye", "Zoe"=>"Morning", "Ben"=>"Evening"];
ksort($y);
foreach($y as $k=>$v){
    echo "Key = " . $k . ", Value = $v; ";
}
