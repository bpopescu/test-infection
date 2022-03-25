<?php

namespace bpopescu\infection;

class Bla
{
    public function ceva(float $a, float $b, bool $c = false): float
    {
        $factor = ($c) ? 1.1 : 1;
        return $a * $b * $factor;
    }
}

