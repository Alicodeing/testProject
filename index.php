<?php

// $year = 2025;

// if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
//     echo "{$year} is Leap year";
// }else if( $year % 4 == 0 && $year % 100 == 0 ){
//     echo "{$year} is not Leap year";
// }else if($year % 4 == 0){
//     echo "{$year} is Leap year";
// }else{
//     echo "{$year} is not leap year";
// }

// echo "\n";

// if($year % 4 ==0 && ($year % 100 != 0 && $year % 400 == 0)){
//     echo "{$year} is Leap year";
// }else{
//     echo "{$year} is not Leap year";
// }

// $n = 13;

// if($n % 2 == 0){
//     echo "Even Number";
// }else{
//     echo "Odd Number";
// }
// echo "\n";

// $number = ($n % 2 == 0) ? "Even Number" : "Odd Number";

// echo $number;

// $n = 13;

// $r = $n % 2;

// switch($r){
//     case 0: 
//         echo "{$n} is an Even Number";
//         break;
//     default:
//         echo "{$n} is an Odd Number"."\n";    
// }

// $color = "blue";

// switch($color){
//     case "red":
//     case "green":
//         echo ucwords($color). " is our favorite color";
//         break;
//     case "blue":
//         echo ucwords($color)." is not our favorite color". "\n";
        
//     default:
//         echo "Color isasd=


// function greet($name, $time = "Morning"){
//     echo "Good $time $name","\n";
// }

// greet("John");
// //===================
// function evenOrOdd ($number){
//     if($number % 2 == 0){
//         return "even";
//     }
//     return "odd";
// }
// $n = 17;
// $result = evenOrOdd($n);

// echo "This number $n is $result ";

// //=======================================

// function add($num1,$num2){
//     $result = $num1 + $num2;
//     return $result;
// }

// $summtion = add(10, 20);

// echo "The Sum of 10 + 20 = $summtion";

// function addFiveNumber ($num1, $num2, $num3, $num4, $num5){
//     $result = $num1 + $num2 + $num3 + $num4 + $num5;

//     return $result;

// }

// $sum = addFiveNumber(10, 33, 45, 23, 44);

// echo $sum;




// $veryOld = 0;
// $old = 1;
// $new = 1;

// for($i = 0; $i < 10; $i++){
//     echo $veryOld. " ";
//     $old = $new;
//     $new = $old + $veryOld;
//     $veryOld = $old;
// }

// function sum($x, $y,...$numbers): int {

//     $result = 0;
//     for( $i = 0; $i < count($numbers); $i++){
//         $result += $numbers[$i];

//     }
//     return $result;

// }

// echo sum(1,2,3,4, 5, 6, 7, 8);

// function fibonacci($old, $new, $start, $end){
//     if($start > $end){
//         return;
//     }
//     $start++;

//     echo $old. " ";
    
//     $_temp = $old + $new;
//     $old = $new;
//     $new = $_temp;

//     fibonacci($old, $new, $start, $end);
// }

// fibonacci(1, 2, 15, 17);

// function doSumthing(){

//     static $i;
//     $i = $i ?? 0;

//     $i++;
//     echo $i. "\n";
// }

// doSumthing();
// doSumthing();
// doSumthing();

// function countDown($x){
//     if($x<=0){
//         return $x;
//     }

//     echo $x. "\n";


//     countDown($x-1);

// }

// countDown(10);

// function test($x = 5) { 
//     return $x * $x; 
// }
//  echo test(); 

function trueOrFalse(){
    if(false){ 
        return "true";
    }
    else{
        return "false";
    }
}
echo trueOrFalse();


