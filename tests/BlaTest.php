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

    public function testAltceva()
    {
        $this->assertEquals(3.3, (new Bla())->altceva(1,2,3));
        $this->assertEquals(6, (new Bla())->altceva(null,false,3));
        $this->assertEquals(2.222, (new Bla())->altceva(null,false));
//        $this->assertEquals(2.4442, (new Bla())->altceva(null));
        $this->assertEquals(2.4442, (new Bla())->altceva(2));
    }


}