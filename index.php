<?php
/************************************PHP Operators********************************* */
//Toán tử
//PHP String Operators
//Concatenation assignment(Phép gán)
$txt1 = "Hi";
$txt2 = "Xin chào mọi người";
echo $txt1 .= $txt2; //HiXin chào mọi người


echo "</br>" . "============" . "</br>";

$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

$array = $x + $y; //Array ( [a] => red [b] => green [c] => blue [d] => yellow )
// vì đây là array nên echo sẽ không hiển thị nó thay bằng print_r
 var_dump($array);
echo "</br>" . "============" . "</br>";
print_r($array);
echo "</br>" . "============" . "</br>";

$number = (object) 8;
print_r($number);
echo "</br>" . "============" . "</br>";

//Hàm emty là hàm kiểu biến đó trống hay không
$user = "";
echo (empty($user)) ? true : false;//true




?>