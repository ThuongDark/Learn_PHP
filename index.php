<?php


/*
    var_dump() sẽ in ra thông tin của biến gồm kiểu dữ liệu của biến và giá trị.
    is_* :* => int, bool, float, nummeric, string, array, object
    int: là số nguyên
    float: là số thập phân
    bool: trả về true hoặc false
    nummeric: kiểm tra có phải là số hay không nếu string trả về false;
    NaN là viết tắt của Not a Number (không phải là số)
    ...


*/
// =============int là số nguyên là số không có dấu phẩy=================================
$n_int = 6868;
var_dump(is_int($n_int));
echo "</br>"."============"."</br>";



// ==============float là số có đấy chấm và có thể lưu trữ số lớn hơn int================
$n_float =1.9e411;//Float max
var_dump($n_float);
var_dump(is_float($n_float));
echo "</br>"."============"."</br>";


/*=================== NaN là viết tắt của Not a Number (không phải là số)================== */

$nan = acos(8);
// var_dump($nan);
// echo var_dump(is_nan($nan)); ==> result :True

echo "</br>"."============"."</br>";

/*============== kiểm tra dữ liệu đó có phải là số hay không? nếu string -> fasle================ */
$n_nummeric = 6655;//true
$n_nummeric = "222";//true
$n_nummeric = "test";//fasle
var_dump(is_numeric($n_nummeric));

echo "</br>"."============"."</br>";

/*=========================PHP Casting String and Float to Integers =======================
**************************(Truyền chuỗi và thập phân thành số nguyên)*********************** 

Syntax: (_)$...
Mô tả : _ là kiểu dữ liệu muốn chuyển đổi string,float,int,object,array.
        $... là tên biến muốn chuyển đổi.
Note: có thể sử dụng var_dump để xem trực quan.
*/

$xy = 2343.99;
var_dump($xy);
echo " ==> ";
$cast = (array)$xy;
var_dump($cast);

echo "</br>"."============"."</br>";
/* Kiểm tra nó có phải lá null không ? */
$n_null=null;
echo var_dump(is_null($n_null));

?>