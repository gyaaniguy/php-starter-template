<?php

namespace gyaani\guy\Classes;


class SkeletonClassTest extends \PHPUnit\Framework\TestCase
{

    public function testDsf()
    {
        $s = new SkeletonClass();
        self::assertFalse($s->dsf()===2);
    }
}
