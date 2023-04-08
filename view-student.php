<?php

require_once 'vendor/autoload.php';
use App\classes\Student;

//Student::deleteStudentInfo();
$message='';

if (isset($_GET['delete'])){
    $id = $_GET['id'];
    Student::deleteStudentInfo($id);
}


$queryResult = Student::getAllStudentInfo();

?>

<hr>

<a href="add-student.php">Add Student</a> ||
<a href="view-student.php">View Student</a>

<!--<h1 style="color: #1c7430">--><?php //echo $message?><!--</h1>-->
<hr>

<table border="1" width="700">
    <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Student Mobile</th>
        <th>Action</th>
    </tr>
    <?php while ($student = mysqli_fetch_assoc($queryResult)){?>

    <tr>
        <td><?php echo $student['id']?></td>
        <td><?php echo $student['name']?></td>
        <td><?php echo $student['email']?></td>
        <td><?php echo $student['mobile']?></td>
        <td>
<!--*php? ?means get method            -->
            <a href="edit-student.php?id=<?php echo $student['id']?>">Edit</a> |
            <a href="?delete=true&id=<?php echo $student['id'];?>"
               onclick="return confirm('Are you sure to delete this!!');">Delete</a>
        </td>
    </tr>
    <?php }?>
</table>


