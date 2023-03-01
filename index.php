<?php
/************************************PHP Constants********************************* */
/**Syntax: denfine(name,value) 
 * name: tên của hằng
 * value: giá trị
 * Note: tên hằng phải nằm trong dấu ""
*/
define("VALUE", "Đây là value");
echo VALUE; 
echo "</br>"."============"."</br>";
/***********************PHP Constant Arrays********************************
 * 
 */

define("cars",["Xe 1","Xe 2","Xe 3"]);
echo cars[1];
echo "</br>"."============"."</br>";
/***********************Constants are Global********************************
 * Hằng có tính global có thể truyền thẳng vào function
 * Vì có thể truyền thẳng vào function nên không cần khai báo global như biến bình thường
 */

 define("NUMBER",99);

 function getNumber()
 {
    echo NUMBER;

}
getNumber();
// so sánh với biến
// $number =88;
// function getNumber2()
// {
//     global $number;
//     echo $number;
// }
// getNumber2()//88
?>