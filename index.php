<?php

/*********************Array_string ascending order************* */
$array_strings = array('c','b','a','d');
sort($array_strings);
foreach($array_strings as $array_string )
{
echo $array_string;//abcd
}
echo "</br>"."============"."</br>";


/*********************Array_number ascending order************* */
$array_numbers = array(5,3,2,1,4);
sort($array_numbers);
foreach($array_numbers as $array_number )
{
echo $array_number;//12345
}
echo "</br>"."============"."</br>";


/*********************Array_string descending order************* */
$array_strings = array('c','b','a','d');
rsort($array_strings);
foreach($array_strings as $array_string )
{
echo $array_string;//abcd
}
echo "</br>"."============"."</br>";



/*********************Array_number descending order************* */
$array_numbers = array(5,3,2,1,4);
rsort($array_numbers);
foreach($array_numbers as $array_number )
{
echo $array_number;//12345
}
echo "</br>"."============"."</br>";

?>