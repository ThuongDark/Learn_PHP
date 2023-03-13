<?php
/*********************Array value ascending order************* */
$array = array('HTML'=>100,'CSS'=>800,'JAVASCRIPT'=>500,'REACTJS'=>120);
asort($array);
foreach($array as $list=>$coin)
{
echo "$list : $coin.000VND ".'<br>';
/*
HTML : 100.000VND
REACTJS : 120.000VND
JAVASCRIPT : 500.000VND
CSS : 800.000VND */
}
echo "</br>"."============"."</br>";
/*********************Array value ascending order************* */
arsort($array);
foreach($array as $list=>$coin)
{
echo "$list : $coin.000VND ".'<br>';
/*
CSS : 800.000VND
JAVASCRIPT : 500.000VND
REACTJS : 120.000VND
HTML : 100.000VND */
}
echo "</br>"."============"."</br>";
/*********************Array key descending order************* */
ksort($array);
foreach($array as $list=>$coin)
{
echo "$list : $coin.000VND ".'<br>';
/*
CSS : 800.000VND
HTML : 100.000VND
JAVASCRIPT : 500.000VND
REACTJS : 120.000VND */
}
echo "</br>"."============"."</br>";
/*********************Array key descending order************* */
krsort($array);
foreach($array as $list=>$coin)
{
echo "$list : $coin.000VND ".'<br>';
/*
REACTJS : 120.000VND
JAVASCRIPT : 500.000VND
HTML : 100.000VND
CSS : 800.000VND */
}
echo "</br>"."============"."</br>";

?>