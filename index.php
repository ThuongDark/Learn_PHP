<?php

// Xem vòng lặp hoạt động
$number =0;
$condition =2;
do{
echo "Giá trị của number: ".$number;
$number++;
echo "- Giá trị đã tăng: ".$number;
echo "</br>";
//Thông báo điều kiện thoả mãn
if ($number==$condition)
{
    echo "Giá trị của hai biến đã thoả mãn"."</br>";
}elseif ($number>$condition)
{echo "Giá trị của biến number đã tăng "."</br>";}
}while($number<=$condition)
?>