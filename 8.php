<?php
$age="test";
if ($age>=18 and $age<=59 ){
    echo "Вам еще работать и работать";
}

if ($age>59 ){
    echo "Вам пора на пенсию";
}

if ($age>0 and $age<18 ){
    echo "Вам еще рано работать";
}

if ($age<0 OR !is_int($age)){
    echo "Неизвестный возраст";
}