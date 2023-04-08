<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 26-Dec-17
 * Time: 12:41 PM
 */

class Demo
{
    public $age=22;
    protected $location = "Farmgate";
    private $mobile='01521454482';

    public function newOne(){
        echo 'In new one';
    }

    protected function newTwo(){
        echo 'In new two';
    }

    private function newThree(){
        echo 'In new three';
    }
}