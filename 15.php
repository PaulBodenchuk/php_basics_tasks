<?php
$a = 5;
$b = 2;
$operator = '*';
$res = 0;

if ($operator == '/' and $b == 0) {
    echo "На 0 делить нельзя";
}  else {
    switch ($operator){
        case '/':
            $res = $a/$b;
            break;
        case '*':
            $res = $a*$b;
            break;
        case '+':
            $res = $a+$b;
            break;
        case '-':
            $res = $a-$b;
            break;
        case '%':
            $res = $a%$b;
            break;
    }
    echo "rusult = ".$res;
}