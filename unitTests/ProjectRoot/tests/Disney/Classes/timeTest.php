<?php

namespace Disney;

use Disney\Classes\Time;

class TimeTest extends \PHPUnit\Framework\TestCase {

    public function testInstance()
    {
        $timeInstance = new Time(3,12,2018);
        $this->assertInstanceOf('Disney\Classes\Time', $timeInstance);
    }
}
