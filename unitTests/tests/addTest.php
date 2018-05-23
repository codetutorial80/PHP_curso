<?php

class ProviderTest extends PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testBinaryAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    /**
     * Addition provider function
     */
    public function additionProvider()
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 2]
        ];
    }
}
