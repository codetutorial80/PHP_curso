<?php
// controllers/GreetingController.php
//

class GreetingController extends DefaultController 
{
    protected $section = null;

    public function __construct()
    {
        $this->section = new Greeting;
    }

    public function hello()
    {
        $message = $this->section->hello();

        include_once 'views/message.php';
    }

    public function goodbye()
    {
        $message = $this->section->goodbye();

        include_once 'views/message.php';
    }

}

