<?php

namespace BiscuitApp;

require_once 'vendor/autoload.php';

class Biscuit
{
    protected $name;
    protected $img;
    protected $RDT;
    protected $description;
    protected $wikipedia;

    //getter methods
    public function getName(): string
    {
        return $this->name;
    }

    public function getImg(): string
    {
        return $this->img;
    }

    public function getRDT(): string
    {
        return $this->RDT;
    }
}
