<?php


interface worker
{
	public function work();
	public function eat();
}



class robot implements worker
{       
	public function work() 
	{
	    echo __CLASS__ . " trabajando";
	}
	public function eat() 
	{
	    echo __CLASS__ . " comiendo????";
	}

};      

class person implements worker
{       
	public function eat()
	{
	    echo __CLASS__ . " comiendo";
	}
        public function work() 
	{
	    echo __CLASS__ . " trabajando";
	}

}       

class manage {
    private $worker;
    public function __construct(worker $worker) {
	$this->worker = $worker;	
    }

    public function process() {
	$start = strtotime('12:00:00');
	$end = strtotime('14:00:00');
	if (time() >= $start && time() <= $end) {
	   $this->worker->eat();
	} else {
           $this->worker->work();
	}
    }
}

$person = new person();
$robot = new robot();

$manager = new manage($robot);
$manager->process();

