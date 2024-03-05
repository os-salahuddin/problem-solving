<?php
function fibonacci($n)
{
    $fib = [];

    $fib[0] = 0;
    $fib[1] = 1;

    for($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i-1] + $fib[$i-2];
    }

    return $fib[$n];
}


echo fibonacci(5);
// 0 1 1 2 3 5 8
//fib(5) = fib(4) + fib(3)
//       = fib(3) + fib(2) + fib(2) + fib(1)
//       = fib(2) + fib(1) + fib(1) + fib(0) + fib(1) + fib(0) + fib(1)
//       = fib(1) + fib(0) + fib(1) + fib(1) + fib(0) + fib(1) + fib(0) + fib(1)
//       = 1 + 0 + 1 + 1 + 0 + 1 + 0 + 1