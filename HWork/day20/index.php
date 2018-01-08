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

//    $link = mysqli_connect('localhost','root','', 'php72');
//
//    $dataQuery = "SELECT * FORM students";
//
//    if(mysqli_query($link, $dataQuery)){
//        echo 'Student info save successfull';
//    }else{
//        die('Query problem'.mysqli_error($link));
//    }
//    print_r($dataQuery);

?>
<style>
    table, tr, td{
        border: 1px solid #dddddd;
    }
    .container{
        width: 600px;
        margin: 0 auto;
    }
    a{
        text-decoration: none;
        padding: 5px 10px;
        background-color: #dddddd;
    }
    a:hover{
        background-color: #aadccc;
    }

</style>
<div class="container">
<hr/>
    <a href="index.php">Add Student</a>
    <a href="view-students.php">View Students</a>
<hr/>
<form action="" method="post">
    <table width="100%">
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
            <td><input type="submit" name="btn" id="btn" value="Add"></td>
        </tr>

    </table>
</form>
</div>

<!--php file to file data neye asar syntex...-->
<!--? is get method..-->
<!--example.php?a=b
index is a..-->
<!--for data receive-->
<!--$res= $_GET['w'];-->
<!--echo $res;-->