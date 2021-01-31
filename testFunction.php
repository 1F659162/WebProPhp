<?php
$x = 100;
$y = 10;
$operator = '*' ;

function plus($x , $y){
    echo "x + y = ".($x+$y)."<br>";
}
function sub($x , $y){
    echo "x - y = ".($x-$y)."<br>";
}
function mul($x , $y){
    echo "x * y = ".($x*$y)."<br>";
}
function div($x , $y){
    echo "x / y = ".($x/$y)."<br>";
}
switch($operator){
    case "+" :
        plus($x,$y);
        break ;
    case "-" :
        sub($x,$y);
        break ;
    case "*" :
        mul($x,$y);
        break ;
    case "/" :
        div($x,$y);
        break ;
    default ;
}
?>