<?php
//    //require_once 'app\classes\Student.php';
//    //unit test korte hobe...xml
//    //mysql, mysqli, PDO libary of Row php libary
//require_once 'vendor\autoload.php';
//
//    use App\classes\Student;
//    if (isset($_POST['btn'])){
//        //$student = new app\classes\Student();
//        Student::saveStudentInfo($_POST);
//    }
//?>


<?php

require 'vendor\autoload.php';

use App\classes\Address;

if (isset($_POST['btn'])){

    Address ::seveInfoUser($_POST);

}

?>

<form action="" method="post">
    <table>
        <tr>
            <th>First Name </th>
            <td><input type="text" name="first_name" id="firstName"></td>
        </tr>
        <tr>
            <th>Last Name </th>
            <td><input type="text" name="last_name" id="lastName"></td>
        </tr>

        <tr>
            <th>Email Address</th>
            <td><input type="text" name="email_address" id="emailAddress"></td>
        </tr>
        <tr>
            <th>Mobile No</th>
            <td><input type="text" name="mobile_number" id="numberNumber"></td>
        </tr>
         <tr>
            <th>Address</th>
            <td><textarea name="address" id="address" cols="20" rows="3"></textarea></td>
        </tr>
        
        <tr>
            <th></th>
            <td><input type="submit" name="btn" id="btn"></td>
        </tr>

    </table>
</form>
