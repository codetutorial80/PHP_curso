<?php

namespace Disney;

use Disney\Classes\Donald;

class DonaldTest extends \PHPUnit\Framework\TestCase {
    public function testInstance() {
        $pato = new Donald();
        $this->assertInstanceOf('Disney\Classes\Donald', $pato);
    }
}

