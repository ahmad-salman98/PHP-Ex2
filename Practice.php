<?php 
// function isLeap($year){

//     if($year%4==0){
//         echo"this year is a leap year <br> ";
//     }
//     else{
//         echo"this year is NOT a leap year <br>";
//     }
// }

// isLeap(2013);
// isLeap(2014);
// isLeap(2016);

// ===================================

// function whichSeason($temp){
//     if($temp >= 20){
//         echo"ths is summertime ! <br>";
//     }
//     else {
//         echo"this is wintertime ! <br>";
//     }
// }

// whichSeason(15);
// whichSeason(25);
// =====================================

// function intSum( $int1 ,$int2){
//     if($int1 != $int2){
//         $out=$int1+$int2;
//         echo "$out" .'<br>';
//     }
//     else{
//         $out =($int1+$int2)*3;
//         echo"$out".' <br>';
//     }
// }

// intSum(4,3);
// intSum(4,4);

// =====================================

// function is30($int1,$int2){
//     if($int1+$int2==30){
//         echo  "true <br>";
//     }
//     else {
//         echo "false <br>";
//     }

// }
// is30 (10 ,15);
// is30 (26,4);
// =========================================

// function isDiv3($int){
//     if ($int%3==0){
//         echo "trur <br>";
//     }
//     else {
//         echo "false <br>";
//     }
// }
// isDiv3(23);
// isDiv3(21);
// =======================================

// function is2050($int){
//     if($int > 19 && $int <51){
// echo "true <br>";
//     }
//     else {
//         echo"false <br>";
//     }
// }
// is2050(49);
// is2050(51);
// =======================================
// function maxnum($int1,$int2,$int3){
//     $max = max($int1,$int2,$int3);
//     echo "$max";
// }
// maxnum(4,7,3);
// ======================================

// function elecBill($num){
//     if($num<51) echo ($num*2.5);
//     elseif (50<$num && $num <151) echo(50*2.5 + ($num-50)*5); 
//     elseif (150<$num && $num <251) echo(50*2.5 +100*5+ ($num-150)*6.2); 
//     else  echo(50*2.5 +100*5+ 100*6.2+ ($num-250)*7.5); 
//     }

//     elecBill(100);
// ===================================


// function calc($num1, $sign,$num2){
//     if($sign=='+') echo ($num1+$num2) . '<br>';
//     elseif ($sign=='-') echo ($num1-$num2). '<br>';
//     elseif($sign=='*') echo ($num1*$num2). '<br>';
//     elseif($sign=='/') echo ($num1/$num2). '<br>';
//     else echo('Undefind operation');
// }
// calc(2 ,'+',6);
// calc(2,'-',6);
// calc(2,'*',6);
// calc(2,'/',6);
// =====================================

// function age ($age){
//     if($age>=18)echo'Eligable person';
//      else echo'NON Eligable person';
// }
// age(18)
// ========================================

// function oddEven($num)
// {
//     if ($num == 0) {
//         echo 'Num = 0';
//     } elseif ($num % 2 == 0) echo "$num is Even";
//     else echo "$num is Odd";
// }
// oddEven(4);
// echo '<br>';
// oddEven(11);
// =================================

// function sixSubjectsGrade($s1, $s2, $s3, $s4, $s5, $s6)
// {
//     $avg = ($s1 + $s2 + $s3 + $s4 + $s5 + $s6) / 6;
//     if ($avg < 60) {
//         echo ("Grade = F");
//     } elseif ($avg >= 60 && $avg < 70) {
//         echo ("Grade = D");
//     } elseif ($avg >= 70 && $avg < 80) {
//         echo ("Grade = C");
//     } elseif ($avg >= 80 && $avg < 90) {
//         echo ("Grade = B");
//     } elseif ($avg >= 90 && $avg < 100) {
//         echo ("Grade = A");
//     }
// }

// sixSubjectsGrade(80, 70, 60, 50, 90, 100);
// echo '<br>';
// sixSubjectsGrade(90, 80, 70, 50, 90, 100);
// echo '<br>';
// sixSubjectsGrade(50, 40, 30, 10, 80, 70);
// echo '<br>';
// ==================================================

// $arr = array('white', 'green', 'red');


// echo ("The memory of that scene for me is like a frame 
// of film forever frozen at that moment: the $arr[2] carpet,
//  the  $arr[1] lawn, the  $arr[0] house, the leaden sky.
//   The new president and his first lady. - Richard M. Nixon");
// ===========================================================

// $arr = array('green', 'red', 'white');
// echo '<ul>';
// foreach ($arr as $p) {
//     echo '<li>' . $p . '</li>';
// }
// echo '</ul>';

// ===============================================

// global $cities;
// $cities =  array(
//     "Italy" => "Rome", "Luxembourg" => "Luxembourg",
//     "Belgium" => "Brussels", "Denmark" => "Copenhagen",
//     "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava",
//     "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens",
//     "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid"
// );

// function capital($city)
// {
//     global $cities;
//     echo (" The capital of $city is $cities[$city]" . '<br>');
// }
// capital("Italy");
// capital("Belgium");
// capital("Ireland");

// ======================================

// $color = array(4 => 'white', 6 => 'green', 11 => 'red');

// echo ($color["4"]);

// ===============================


// $arr = [1, 2, 3, 5, 6];
// function insertVal($val, $ind)
// {
//     global $arr;
//     $result = array_merge(array_slice($arr, 0, $ind), array($val), array_slice($arr, $ind));
//     print_r($result);
// }
// insertVal(4,3);
// =========================================

// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
// asort($fruits);
// print_r($fruits);
// ==============================================

// $temp = [
//     78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
// ];
// sort($temp);
// $avg = 0;
// foreach ($temp as $t) {
//     $avg += $t;
// }
// $avg = $avg / count($temp);
// echo "Average temp is $avg <br>";
// print_r(array_slice($temp, 0, 5));
// echo '<br>';
// print_r(array_slice($temp, -5, 5));

// ===============================================

// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
// print_r( array_merge($array1, $array2));

// ================================================

// $colors = array("red", "blue", "white", "yellow");
// $colors = array_map('strtoupper', $colors);

// print_r($colors);
// ===================================================

// for ($i = 200; $i < 250; $i++) {
//     if ($i % 4 == 0)
//         echo "$i, ";
// }
// =====================================================

// $words =  array("abcd", "abc", "de", "hjjj", "g", "wer");
// $result = "";
// foreach($words as $word){
// if( strlen($word)>strlen($result)){
//     $result = $word;
// }
// }
// print_r($words);
// echo"<br>" ."$result";
// ========================================================

// function random10($min, $max)
// {
//     for ($i = 0; $i < 10; $i++) {
//         echo rand($min, $max) . "<br>";
//     }
// }
// random10(10, 20);

// =====================================================

// $array1 = array(2, 0, 10, 12, 6);

// function not0($int)
// {
//     return $int != 0;
// }

// $array1 = array_filter($array1, "not0");

// function lowest($arr)
// {
//     $arr = array_filter($arr, "not0");
//     echo min($arr);
// }
// lowest($array1);
// =======================================================

// for ($i = 1; $i <= 10; $i++) {
//     echo $i;
//     if ($i < 10) echo "-";
// }
// =======================================================

// $str = "count number of R's in a random text";
// function Rcount($str)
// {

//     $str = str_split($str);
//     $count = 0;
//     for ($i = 0; $i < count($str); $i++) {
//         if ($str[$i] == "r" || $str[$i] == "R")
//             $count++;
//     }
//     echo $count;
// }
// Rcount($str);
// ====================================================

// function counter($str)
// {
//     $counter = 0;
//     for ($i = 0; $i < strlen($str); $i++) {
//         if ($str[$i] == "r") {
//             $counter++;
//         }
//     }
//     echo $counter;
// }
// counter("random number");

// // counter("Hello");


// function islower($str)
// {
//     $count = 0;
//     $result = "All letters are lowercase";
//     for ($i = 0; $i < strlen($str); $i++) {
//         if (ctype_upper($str[$i])) {
//             $count++;
//             $result = " There are $count  uppercase letters";
//         }
//     }
//     echo $result;
// }
// islower("Hello There , How are You");
// ==========================================================

// function sumBetween($min, $max){
//     $sum =0;
// for($i=$min; $i<=$max;$i++){
//     $sum+=$i;
// }
// echo"The total sum of integers from $min to $max is $sum <br>";
// }
// sumBetween(10,15);
// sumBetween(0,30);
// ====================================================

// for ($i = 'A'; $i <= 'E'; $i++) {
//     for ($x = $i; $x < 'E'; $x++) {
//         echo "A";
//     }

//     echo $i;

//     for ($y = 'A'; $y < $i; $y++) {
//         echo ($i);
//     }
//     echo "<br>";
// }

// ===========================================================

// for ($i = 1; $i <= 5; $i++) {
//     for ($x = $i; $x < 5; $x++) {
//         echo "1";
//     }

//     for ($y = 1; $y < $i; $y++) {
//         echo $i;
//     }

//     echo $i;
//     echo "<br>";
// }

// ==============================================

// for ($i = 1; $i <= 5; $i++) {
//     for ($x = 1; $x <= 5; $x++) {
//         if ($x != $i) {
//             echo 0;
//         } else echo $x;
//     }

//     echo "<br>";
// }

// for ($i = 1; $i <= 5; $i++) {
//     for ($x = 1; $x <= 5; $x++) {
//         if ($x == $i) {
//             echo $i;
//         } else echo 0;
//     }

//     echo "<br>";
// }

// ============================================


// function factorial($int)
// {

//     $result = $int;
//     $num = $int;
//     while ($num > 1) {
//         $result *=  --$num;
//     }

//     echo "The factorial of $int is $result";
// }
// factorial(5);
// =============================================

// function fibonacciDigits($int)
// {
//     $num1 = 0;
//     $num2 = 1;
//     echo "$num1 $num2 ";
//     for ($i = 0; $i < $int - 2; $i++) {
//         $new = $num1 + $num2;
//         $num1 = $num2;
//         $num2 = $new;
//         echo $new . " ";
//     }
// }
// fibonacciDigits(11);
// ==============================================

// function howManyChar($str, $char)
// {
//     $count = 0;
//     for ($i = 0; $i < strlen($str); $i++) {
//         if ($str[$i] == $char) {
//             $count++;
//         }
//     }
//     echo "number of \" $char \" character in $str = $count";
// }
// howManyChar("\" orange coding academy \"", "c");
// ===============================================

// for ($i = 1; $i <= 6; $i++) {
//     echo "<tr>";
//     for ($x = 1; $x <= 5; $x++) {
//         echo "<td>" . "$i x $x =" . "</td>";
//     }
//     echo "</tr>";

//     echo "<br>";
// }
// ؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟؟

// for ($i = 1; $i <= 50; $i++) {
//     if ($i % 5 == 0 && $i % 3 == 0)
//         echo "FizzBuzz ";

//     elseif ($i % 3 == 0)
//         echo "Fizz ";

//     elseif ($i % 5 == 0)
//         echo "Buzz ";
//     else echo $i;

//     echo "<br>";
// }
// ====================================================

// function floyd($n)
// {
//     $count = 1;
//     $num = 1;
//     for ($x = 0; $x < $n; $x++) {
//         // echo "coun =$count, num =$num";
//         for ($i = 1; $i <= $num; $i++) {
//             echo "$count  ";
//             $count++;
//         }
//         $num++;
//         echo "<br>";
//     }
// }
// floyd(5);
// ===================================================

// function pyramid($n)
// {
//     $count = "A";
//     for ($i = 0; $i < $n; $i++) {
//         for ($y = $n; $y > $i; $y--) {
//             echo "&nbsp ";
//         }
//         for ($x = 'A'; $x <= $count; $x++) {
//             echo "$x &nbsp";
//         }
//         echo "<br>";
//         $count++;
//     }
//     $count = chr(ord($count) - 2);

//     for ($i = 1; $i < $n; $i++) {
//         for ($y = 0; $y <= $i; $y++) {
//             echo "&nbsp ";
//         }
//         for ($x = 'A'; $x <= $count; $x++) {
//             echo "$x &nbsp";
//         }
//         echo "<br> ";
//         $count = chr(ord($count) - 1);
//     }
// }
// pyramid(8);
