<?php

namespace bpopescu\infection;

class Bla
{
    public function ceva(float $a, float $b, bool $c = false): float
    {
        $factor = ($c) ? 1.1 : 1;
        return $a * $b * $factor;
    }

    public function altceva(?float $a, bool $c = true, float $f = 1.111): float
    {
        $factor = ($c) ? 1.1 : 1;
        $x = (!empty($a)) ? $a : 2;
        return $x * $factor * $f;
    }
}

