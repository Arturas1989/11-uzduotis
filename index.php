<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

echo '"11 uzduotis"';
    echo '<br>';

    

    $num1 = rand(1000, 9999);
    $num2 = rand(1000, 9999);
    $num3 = rand(1000, 9999);
    $num4 = rand(1000, 9999);
    $num5 = rand(1000, 9999);
    $num6 = rand(1000, 9999);

    

    function indexOfNum($n, $num1, $num2, $num3, $num4, $num5, $num6) {
        $count=0;
        if($n>$num1){
            $count++;
        }
        if($n>$num2){
            $count++;
        }
        if($n>$num3){
            $count++;
        }
        if($n>$num4){
            $count++;
        }
        if($n>$num5){
            $count++;
        }
        if($n>$num6){
            $count++;
        }
        return $count;
    }

    $indexOfNum1 = indexOfNum($num1, $num1, $num2, $num3, $num4, $num5, $num6);
    $indexOfNum2 = indexOfNum($num2, $num1, $num2, $num3, $num4, $num5, $num6);
    $indexOfNum3 = indexOfNum($num3, $num1, $num2, $num3, $num4, $num5, $num6);
    $indexOfNum4 = indexOfNum($num4, $num1, $num2, $num3, $num4, $num5, $num6);
    $indexOfNum5 = indexOfNum($num5, $num1, $num2, $num3, $num4, $num5, $num6);
    $indexOfNum6 = indexOfNum($num6, $num1, $num2, $num3, $num4, $num5, $num6);

    
    
        $str='';
        if ($indexOfNum1 == 5) {
            $str.= ($num1. ', ');
        }
        if ($indexOfNum2 == 5) {
            $str.= ($num2. ', ');
        }
        if ($indexOfNum3 == 5) {
            $str.= ($num3. ', ');
        }
        if ($indexOfNum4 == 5) {
            $str.= ($num4. ', ');
        }
        if ($indexOfNum5 == 5) {
            $str.= ($num5. ', ');
        }
        if ($indexOfNum6 == 5) {
            $str.= ($num6. ', ');
        }


        if ($indexOfNum1 == 4) {
            $str.= ($num1. ', ');
        }
        if ($indexOfNum2 == 4) {
            $str.= ($num2. ', ');
        }
        if ($indexOfNum3 == 4) {
            $str.= ($num3. ', ');
        }
        if ($indexOfNum4 == 4) {
            $str.= ($num4. ', ');
        }
        if ($indexOfNum5 == 4) {
            $str.= ($num5. ', ');
        }
        if ($indexOfNum6 == 4) {
            $str.= ($num6. ', ');
        }

        if ($indexOfNum1 == 3) {
            $str.= ($num1. ', ');
        }
        if ($indexOfNum2 == 3) {
            $str.= ($num2. ', ');
        }
        if ($indexOfNum3 == 3) {
            $str.= ($num3. ', ');
        }
        if ($indexOfNum4 == 3) {
            $str.= ($num4. ', ');
        }
        if ($indexOfNum5 == 3) {
            $str.= ($num5. ', ');
        }
        if ($indexOfNum6 == 3) {
            $str.= ($num6. ', ');
        }
        
        if ($indexOfNum1 == 2) {
            $str.= ($num1. ', ');
        }
        if ($indexOfNum2 == 2) {
            $str.= ($num2. ', ');
        }
        if ($indexOfNum3 == 2) {
            $str.= ($num3. ', ');
        }
        if ($indexOfNum4 == 2) {
            $str.= ($num4. ', ');
        }
        if ($indexOfNum5 == 2) {
            $str.= ($num5. ', ');
        }
        if ($indexOfNum6 == 2) {
            $str.= ($num6. ', ');
        }
        
        if ($indexOfNum1 == 1) {
            $str.= ($num1. ', ');
        }
        if ($indexOfNum2 == 1) {
            $str.= ($num2. ', ');
        }
        if ($indexOfNum3 == 1) {
            $str.= ($num3. ', ');
        }
        if ($indexOfNum4 == 1) {
            $str.= ($num4. ', ');
        }
        if ($indexOfNum5 == 1) {
            $str.= ($num5. ', ');
        }
        if ($indexOfNum6 == 1) {
            $str.= ($num6. ', ');
        }

        if ($indexOfNum1 == 0) {
            $str.= ($num1);
        }
        if ($indexOfNum2 == 0) {
            $str.= ($num2);
        }
        if ($indexOfNum3 == 0) {
            $str.= ($num3);
        }
        if ($indexOfNum4 == 0) {
            $str.= ($num4);
        }
        if ($indexOfNum5 == 0) {
            $str.= ($num5);
        }
        if ($indexOfNum6 == 0) {
            $str.= ($num6);
        }

    echo 'Atsitiktiniai skaiciai: ' . $num1 . ', ' . $num1 . ', ' . $num1 . ', ' . $num1 . ', ' . $num1 . ', '
    echo '<br>';
    echo 'Nuo didziausio iki maziausio: ' . $str;
    echo '<br>';
?>