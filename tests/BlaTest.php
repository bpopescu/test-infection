<?php

namespace bpopescu\infection\tests;

use bpopescu\infection\Bla;
use PHPUnit\Framework\TestCase;

class BlaTest extends TestCase
{
    public function blaDP(): array
    {
        return [
            [1, 2, false, 2],
            [1, 2, true, 2.2],
            [1.1, 2, false, 2.2],
            [1.1, 2.2, true, 2.662],
        ];
    }

    /**
     * @dataProvider blaDP
     */
    public function testBla($a, $b, $c, $whatShouldReturn): void
    {
        $this->assertEquals($whatShouldReturn, (new Bla())->ceva($a, $b, $c));
    }

//    public function testBlaDefault(): void
//    {
//        $this->assertEquals(2, (new Bla())->ceva(1, 2));
//    }

}