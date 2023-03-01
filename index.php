<?php
//Đếm dộ dài của chuỗi bao gồm dấu cách [space]
echo "Đếm các từ trong chuỗi này - 'Hello test' =>" . strlen('Hello test') . "</br>";


// Trả về số chuỗi nếu string là số sẽ bỏ qua
echo str_word_count('Hello word fddd d') . "</br>"; //4

//Đảo ngược chuỗi;
echo strrev('Hello world') . "</br>";

//----------------Tìm từ trong chuỗi----------------------
/* Syntax : strpos("str","char","position")
str: chuỗi;
char: ký tự muốn tìm kiếm
position: vị trí bắt đầu tìm kiếm if rỗng mặc định bắt đầu position 0

Note: nếu không có ký tự tồn tại trong chuỗi thì sẽ trả về fasle
*/
echo strpos("Hello word? w  w w ", "w") . "</br>";

// $str = "Hello word";
// $char = "word";
// $strpos = strpos($str,$char);

// if ($strpos == false)
// {
//   echo "không tìm thấy ký tự ".$char;
// }
// else
// {
// echo "Đã tìm thấy ký tự ".$char." tại vị trí ".$strpos;
// }



//-------------- Thay đổi ký tự---------------
/* Syntax : str_replace("strSearch","StrReplace","subject")

strSearch : từ muốn tìm kiếm;
strReplace : từ muốn thay đổi
subbject(chủ thể) : là mảng muốn thay đổi

*/
echo str_replace("world","Dolly","Hello mọi người nha world");


?>