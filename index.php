<?php
//Tìm hiểu sơ về array 
//Khai báo mảng dãy số
$arrayNumber = array(1, 2, 3, 4, 5);
//Khai báo mảng chuỗi
$arrayString = array('Apple', 'Banana', 'Orange');
//Khai báo mảng có đánh số index
$arrayIndex = array(1 => 'Apple', 2 => 'Banna', 3 => 'Orange');
//Khai báo mảng có key như user
$arrayIndexUser = array('name' => 'ThuongDark', 'age' => 22, 'job' => 'Đang thất nghiệp');
//==========================================================
//echo $arrayNumber;// vì nó là array nên sử dụng print_r hoặc var_dump
var_dump($arrayNumber); //xem chuỗi trực quan
echo "</br>";
echo $arrayString[2];
echo "</br>";
echo $arrayIndexUser['name']; //ThuongDark
echo "</br>" . "============" . "</br>";
//

/*
foreach ($array as $value) {
code to be executed;
}
*/
foreach ($arrayString as $value) {
    echo "$value <br>";
}
echo "</br>" . "============" . "</br>";

/*
Output: 
Apple
Banana
Orange*/
foreach ($arrayIndexUser as $x => $value) {
    echo "$x: $value <br>";
}
/*
name: ThuongDark
age: 22
job: Đang thất nghiệp
*/
?>