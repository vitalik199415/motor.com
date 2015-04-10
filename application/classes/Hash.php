<?php 

function hashD($text, $n) {
    $old = 0;
    $fib_old = 0;

    if ($n <= 2) $fib = 1;
    //F(n-2)
    $x = 1;
    //F(n-1)
    $y = 1;
    //F(n)
    $fib = 0;
    for ($i = 2; $i < $n; $i++)
    {
      $fib = $x + $y;
      $x = $y;
      $y = $fib;
    }

    ///
    $data = array();
    ///
    $i = 0;
    $len = strlen($text);
    while ($i < $len) {
        ///
        $fib_old = $fib;
        $fib = $fib + $old;
        ///
        $chr = (int)ord(substr($text, $i, 1));

        do {
          $ch = (($chr + $fib) + ($fib * $chr)) % 127;
          if ($ch < 33) {
            $ch += 30;
          }
        } while ($ch > 127);

        $data[] = chr($ch);
        ///
        $old = $fib_old;
        ///
        $i++;
    }
    return sha1(implode("", $data));
}