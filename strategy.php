<?php

class Context
{
 
    private $strategy;
 
    public function __construct(StratageyInterface $strategy)
    {
        $this->strategy = $strategy;
    }
 
    public function contextInterface()
    {
        $this->strategy->algorithmInterface();
    }
 
}

interface StratageyInterface
{
     public function algorithmInterface();
}


class ConcreteStrategyA implements StratageyInterface
{
 
    public function algorithmInterface()
    {
        echo "Called ConcreteStrategyA->algorithmInterface()";
    }
 
}

class ConcreteStrategyB implements StratageyInterface
{
 
    public function algorithmInterface()
    {
         echo "Called ConcreteStrategyB->algorithmInterface()";
    }
 
}



$contextA = new Context(new ConcreteStrategyA());
$contextA->contextInterface();
 
$contextB = new Context(new ConcreteStrategyB());
$contextB->contextInterface();

