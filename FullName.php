<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 26-Dec-17
 * Time: 10:06 AM
 */

class FullName
{
    function makeFullName($firstName, $lastName){
        $fullname = $firstName.' '.$lastName;
        return $fullname;

    }

    function myCalculator($data){
        echo '<pre>';
//        print_r($data);

        $btn= $data['btn'];
        switch ($btn){
            case '+':
                $result = $data['first_number']+ $data['second_number'];
                break;
            case '-':
                $result = $data['first_number']- $data['second_number'];
                break;
            case '*':
                $result = $data['first_number']* $data['second_number'];
                break;
            case '/':
                $result = $data['first_number']/ $data['second_number'];
                break;
            case '%':
                $result = $data['first_number']% $data['second_number'];
                break;
        }
        return $result;

    }
}