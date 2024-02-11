<?php

$principle=1000;
$rate=5;
$time=4;


interest($principle,$rate,$time);




function interest($p,$t,$r){


    $interest = ($p*$t*$r)/100;
    echo "The interest is $interest";
}








?>