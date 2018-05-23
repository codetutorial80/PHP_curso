<?php

class ArrayTest extends PHPUnit\Framework\TestCase 
{
    public function testArrayEmpty()
    {
	    $array = [];
        $this->assertEquals(0, count($array), "Test de array vacio.");
    }

    public function testArrayPushItem()
    {
        $array[] = 'jhon';
        $array[1] = 'mary';
        array_push($array, 'mike');

        $this->assertEquals('mary', $array[1]);
        $this->assertEquals('mike', $array[count($array) - 1]);
        $this->assertEquals('jhon', current($array)); 

        $this->assertEquals(3, count($array));
    }

    public function testArrayPopItem()
    {
        $array = ['jhon', 'mary', 'mike'];

        $this->assertEquals('mike', array_pop($array));
        $this->assertEquals(2, count($array));

    }

    public function arrayMerge() {
	    $arrayA = ['carrot','onion','pea'];
        $arrayB = ['tomato','spinach','lettuce'];
 
        $this->assertEquals(6, count(array_merge($arrayA,$arrayB)));	
    }
}
