<?php

namespace Disney;

use Disney\Classes\Time;
use Disney\Classes\Donald;

class MockingTest extends \PHPUnit\Framework\TestCase {

    public function testNomock()
    {
        $timeInstance = new Time(3,12,2018);

        $pato = new Donald(); 

        $pato->injectTime($timeInstance);

	$result = $pato->mostrarHorario();

        $this->assertEquals('3-12-2018 es mi horario', $result);
    }

    public function testCreateMock()
    {
	$pato = new Donald();

	$timeInstance = $this->createMock('Disney\Classes\Time', array(), array(3, 12, 2017));

        $timeInstance->expects($this->once())
               ->method('getDay')
               ->will($this->returnValue(3));

        $timeInstance->expects($this->once())
               ->method('getMonth')
               ->will($this->returnValue(12));

        $timeInstance->expects($this->once())
               ->method('getYear')
               ->will($this->returnValue(2017));


        $pato->injectTime($timeInstance);

        $result = $pato->mostrarHorario();

        $this->assertEquals('3-12-2017 es mi horario', $result);
    }

    public function testMockBuilder()
    {
        $pato = new Donald();

        $timeInstance = $this->getMockBuilder('Disney\Classes\Time')
                ->setConstructorArgs(array(3,12,2018))
                ->getMock();

        $timeInstance->expects($this->once())
               ->method('getDay')
               ->will($this->returnValue(3));

        $timeInstance->expects($this->once())
               ->method('getMonth')
               ->will($this->returnValue(12));

        $timeInstance->expects($this->once())
               ->method('getYear')
               ->will($this->returnValue(2018));

        $pato->injectTime($timeInstance);

        $result = $pato->mostrarHorario();

        $this->assertEquals('3-12-2018 es mi horario', $result);
    }

}
