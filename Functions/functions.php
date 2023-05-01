<?php

declare(strict_types=1);

function add(int $a, int $b){
    echo 'Arg 1:', gettype($a), "<br>";
    echo 'Arg 2:', gettype($b), "<br>";

    return $a + $b;
}

var_dump(add(2, 4));