<?php

class Book
{
    /**
     * @var string
     */
    private $name;
    
    function __construct($name)
    {
        $this->name = $name;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}