<?php
//require_once 'app\classes\Student.php';
//unit test korte hobe...xml
//mysql, mysqli, PDO libary of Row php libary
require_once 'vendor\autoload.php';

use App\classes\Student;


$id = $_GET['id'];

$queryResult = Student::getStudentinfoById($id);
$student = mysqli_fetch_assoc($queryResult);


if (isset($_POST['btn'])){
    //$student = new app\classes\Student();
    $massage = Student::updateStudentInfo($_POST, $id);
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
        <td><input type="text" name="full_name" id="fullName" value="<?php echo $student['full_name']?>"></td>
            </tr>
            <tr>
                <th>Email Address</th>
                <td><input type="text" name="email_address" id="emailAddress" value="<?php echo $student['email_address']?>"></td>
            </tr>
            <tr>
                <th>Mobile No</th>
                <td><input type="number" name="mobile_number" id="numberNumber" value="<?php echo $student['mobile_number']?>"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" name="btn" id="btn" value="Update"></td>
            </tr>

        </table>
    </form>
</div>

