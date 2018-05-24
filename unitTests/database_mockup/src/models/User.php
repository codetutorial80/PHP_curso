<?php

namespace app\models;

class User
{
    /** @var string */
    private $name;

    /**
      *  @argument $name
      **/
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
      *  @return string
      **/
    public function getName(): string
    {
        return $this->name;
    }
}
