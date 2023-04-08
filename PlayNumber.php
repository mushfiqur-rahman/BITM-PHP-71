<?php
/**
 * Created by PhpStorm.
 * User: mushf
 * Date: 27-Dec-17
 * Time: 11:40 PM
 */

class PlayNumber
{
    public function playNumber(){
        if (isset($_POST['btn']))
        {
            $first_numb = $_POST['first_numb'];
            $second_numb = $_POST['second_numb'];

            $choice=$_POST['check'];
            $result="";

            if ($first_numb<$second_numb){

            for ($i=$first_numb; $i<=$second_numb; $i++)
            {
                if ($i % 2 != 0 && $choice =="odd")
                {
                    $result.=$i." "; //$result=$result$i""
                }elseif ($i % 2 == 0 && $choice =="even"){
                    $result.=$i." ";
                }
            }

            return $result;
        }else {
                for ($i=$first_numb; $i>=$second_numb; $i--)
                {
                    if ($i % 2 != 0 && $choice =="odd")
                    {
                        $result.=$i." "; //$result=$result$i""
                    }elseif ($i % 2 == 0 && $choice =="even"){
                        $result.=$i." ";
                    }
                }

                return $result;
            }
        }
    }


}