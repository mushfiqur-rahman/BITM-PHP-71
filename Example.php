<?php

require_once 'Example.php';


class Demo extends Example
{
    public $name='Mushfiqur Rahman';
    protected $city = 'Khulna';
    private $country ='Bangladesh';

    public function __construct($data)
    {
        $this-> value=$data;
    }

    public function addition(){
        echo 'In addition';
        $this->division();
    }
    protected function subtraction(){
        echo 'In subtraction';
    }
    private function division(){
        echo 'In division';
    }

}