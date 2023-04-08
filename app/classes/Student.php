<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 02-Jan-18
 * Time: 10:54 AM
 */

namespace App\classes;


class Student
{
    public function saveStudentInfo($data){
        $link = mysqli_connect('localhost', 'root','','seip_mushfiq_71');

        $sql = "INSERT INTO students (name, email,mobile) VALUES('$data[name]', 
              '$data[email]', '$data[mobile]')";

        if (mysqli_query($link, $sql)){
            $message = "Student Info save successfully";
            return $message;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }

    public function getAllStudentInfo(){
        $link = mysqli_connect('localhost', 'root','','seip_mushfiq_71');

        $sql = "SELECT * FROM students";
        if (mysqli_query($link, $sql)){
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;

//            echo '<pre>';
//            print_r($queryResult);

        }else{
            die('Query problem'.mysqli_error($link));
        }
    }
}