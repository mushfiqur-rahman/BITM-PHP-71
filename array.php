<?php
//Indexed Arrays

//$data =[];
//Single Array
//$data[0]=10;
//$data[1]=20;
//$data[2]=30;
//
//$data['name']='Mosiur';
//$data['city']='Mirpur-10';
//$data['country']='Bangladesh';
//
//print_r($data);


//Associative Array
//$data = [
//        'name' =>'Mosiur',
//        'city' =>'Mirpur-10',
//        'country' =>'Bangladesh',
//        'phone' =>'01521454482',
//        'gender' =>'Male',
//];

//foreach ($data as $value){
//    echo $value.'<br> <hr><br>';
//}

//echo '<pre>';
//print_r($data);
//echo '</pre>';

//echo '<pre>';
//var_dump($data);
//echo '</pre>';

//Multidimensional Array


//$data = [];
//
//$data[0][0] =10;
//$data[0][1] =20;
//$data[0][2] =30;
//
//$data[1][0] =40;
//$data[1][1] =50;
//$data[1][2] =60;
//
//$data[2][0] =70;
//$data[2][1] =80;
//$data[2][2] =90;
//
//$data[3][0] =100;
//$data[3][1] =110;
//$data[3][2] =120;
//
//foreach ($data as $value){
////    echo $value[0].' '.$value[1].' '.$value[2].'<br><hr><br>';
//    foreach ($value as $v_value){
//        echo $v_value.' ';
//    }
//    echo '<br><hr><br>';
//}
//FUNCTION

//function demo($firstName=null, $lastName=null){
////    $firstName ='Mushfiqur';
////    $lastName ='Rahman';
//    $fullName=$firstName.' '.$lastName;
////    echo $fullName;
//    return $fullName;
//}
//
//echo demo('Mushfiq', 'Rahman');
//echo '<br>...............................<br>';
//$rss = demo('Khulna', 'Bangladesh');
//echo '<br>...............................<br>';
//echo 'Full name is: '.$rss;
//demo('Khulna', '');
//echo '<br>...............................<br>';


class Demo{
    public $name='Kamal';
    public $city='Khulna';

    function add(){
        echo 'In Add';
    }

    function hello(){
        echo 'In Hello';
    }
}
$demo = new Demo();

//$demo->add();
//echo $name;
echo $demo->name;
?>