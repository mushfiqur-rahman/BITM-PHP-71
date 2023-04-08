<?php
/**
 * Created by PhpStorm.
 * User: DIU
 * Date: 1/9/2018
 * Time: 6:48 PM
 */

namespace App\classes;
use App\classes\Database;

class Blog
{
    public function addBlog($data) {

        $fileName = $_FILES['blog_image']['name'];
        $directory = '../assets/images/';
        $imageUrl = $directory.$fileName;
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $check = getimagesize($_FILES['blog_image']['tmp_name']);
        if($check) {
            if(file_exists($imageUrl)) {
                die('This image already exist. Please select another one. Thanks');
            } else {
                if($_FILES['blog_image']['size'] > 500000) {
                    die('Your image size is too large. please select with in 10kb');
                } else {
                    if($fileType != 'JPG' && $fileType != 'png' && $fileType != 'jpg') {
                        die('Image type is not supported. Please use jpg or png');
                    } else {
                        move_uploaded_file($_FILES['blog_image']['tmp_name'], $imageUrl);
                        $sql="INSERT INTO blog (category_id, blog_title, short_description, long_description, blog_image, status) VALUES ('$data[category_id]','$data[blog_title]','$data[short_description]','$data[long_description]','$imageUrl','$data[status]')";
                        if(mysqli_query(Database::dbConnection(),$sql)){
                            $message="Insert Successfully";
                            return $message;

                        } else{
                            die("Query problem".mysqli_error(Database::dbConnection()));
                        }

                    }
                }
            }
        } else {
            die('Please chose a image file thanks !.');
        }
    }
    public function viewBlogInfo(){
        $sql="SELECT * FROM `blog`";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult=mysqli_query(Database::dbConnection(),$sql);
            return $queryResult;
        }else{
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }
    }
    public function getBlogInfo($id){
        $sql="SELECT * FROM blog WHERE id=$id";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $result=mysqli_query(Database::dbConnection(),$sql);
            return $result;
        }
        else{die('Query problem. '.mysqli_error(Database::dbConnection()));
        }
    }


    public function deleteBlogInfo($id){
        $sql="DELETE FROM blog WHERE id=$id";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $message="Delete Successfully";
            return $message;
        }else{
            die("Query problem".mysqli_error(Database::dbConnection()));
        }
    }

    public function getAllPublishedCategoryInfo() {
        $sql = "SELECT * FROM category WHERE status = 1 ";
        if(mysqli_query(Database::dbConnection(),$sql)) {
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            return $queryResult;
        }else{
            die("Query problem".mysqli_error(Database::dbConnection()));
        }
    }





}