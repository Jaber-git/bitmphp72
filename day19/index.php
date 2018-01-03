<?php
    //require_once 'app\classes\Student.php';
    //unit test korte hobe...xml
    //mysql, mysqli, PDO libary of Row php libary
require_once 'vendor\autoload.php';

    use App\classes\Student;
    if (isset($_POST['btn'])){
        //$student = new app\classes\Student();
        Student::saveStudentInfo($_POST);
    }
?>

<form action="" method="post">
    <table>
        <tr>
            <th>Full Name </th>
            <td><input type="text" name="full_name" id="fullName"></td>
        </tr>
        <tr>
            <th>Email Address</th>
            <td><input type="text" name="email_address" id="emailAddress"></td>
        </tr>
        <tr>
            <th>Mobile No</th>
            <td><input type="number" name="mobile_number" id="numberNumber"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" id="btn"></td>
        </tr>

    </table>
</form>
