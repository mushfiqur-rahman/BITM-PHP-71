<?php

require_once 'vendor/autoload.php';

use App\classes\Student;

Student::addition();

$result=[];
$result["string_Length"]=" ";
$result["word_length"]=" ";

//if (isset($_POST['btn'])){
//    $example = new App\classes\Example();
//    $result = $example->wordCharacterCount($_POST);
//}
    use App\classes\Example;

    if (isset($_POST['btn'])){
        $result =Example::wordCharacterCount($_POST);
    }


?>

<form method="post" action="" class="form-group">
      <table>
             <tr>
                 <th>Enter Your String</th>
                 <td><input type="text" name="given_string" size="50" ></td>
             </tr>

             <tr>
                 <th>Total Number of Word</th>
                 <td><input type="text" value="<?php echo $result['string_Length'];?>"</td>
             </tr>

             <tr>
                 <th>Total Number of Character</th>
                 <td><input type="text" value="<?php echo $result['word_length'];?>"></td>
             </tr>


             <tr>
             <th></th><br>
                  <td><input type="submit" name="btn" value="Submit"></td>
             </tr>
      </table>
</form>


