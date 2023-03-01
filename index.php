<?php
//======================Function===================
/*********************Số PI*************************
 * Syntax: pi()
 */
$number_pi = pi();//3.1415926535898
echo var_dump($number_pi);//float(pi)

echo "</br>"."============"."</br>";

/* ==================PHP min() and max() Functions==================== 
*Syntax : min(int or var);
*Syntax : max(int or var);
*/

echo (min(0,100,200,-900,-200));//-900
echo "</br>"."============"."</br>";

echo (max(0,100,200,-900,-200));//200
echo "</br>"."============"."</br>";
/* thử trên array */
$n = array(0,1,2,3,4,5,6,7,8);
echo max($n);//8
echo "</br>"."============"."</br>";

/*==================PHP abs() Function========================
 trả về số dương
 Syntax : abs()
*/

$n_abs = -999;
echo (abs($n_abs));//999

echo "</br>"."============"."</br>";
/* ==================PHP sqrt() Function=======================
Căng bậc 2
Syntax: sqrt(int)
*/
echo(sqrt(9));  // returns 8
echo "</br>"."============"."</br>";

/****************************PHP round() Function********************** 
 Làm tròn
 Syntax: round()
*/

$n_round = 8.4;
$n_round2 = 8.6;

echo "Làm tròn số :".(round($n_round))." : ".(round($n_round2)); //Làm tròn số :8 : 9

echo "</br>"."============"."</br>";

/*******************************Random Numbers****************************
 * Số random (ngẫu nhiên)
 * Syntax: rand(int(min),int(max))
 */
echo (rand(1,9))
?>