<?php
require_once 'vendor/autoload.php';

use App\classes\Student;

$queryResult = Student::getAllStudentInfo();

$message = '';
if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $$message = Student::deleteStudentinfo($id);
}

if (isset($_POST['btn'])) {
    //$student = new app\classes\Student();
    Student::saveStudentInfo($_POST);
}

?>
<style>
    table, tr, td {
        border: 1px solid #dddddd;
    }

    .container {
        width: 600px;
        margin: 0 auto;
    }

    li {
        list-style-type: none;
        display: inline-block;
    }

    a {
        text-decoration: none;
        background-color: #dddddd;
    }

    a:hover {
        background-color: #aadccc;
    }

</style>
<div class="container">
    <hr/>

    <a href="index.php">Add Student</a>
    <a href="view-students.php">View Students</a>

    <hr/>
    <h1><?php echo $message; ?></h1>
    <form action="" method="post">
        <table width="100%">
            <tr>
                <th>Full Name</th>
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

        <table style="border-collapse:collapse;" width="100%">
            <tr>
                <th>Student No</th>
                <th>Student Name</th>
                <th>Student E-mail</th>
                <th>Student Mobile</th>
                <th>Action</th>
            </tr>

            <?php
            while ($students = mysqli_fetch_assoc($queryResult)) {
                ?>
                <!--            //contenteditable="true"-->
                <tr>
                <td><?php echo $students['id'] ?></td>
                <td><?php echo $students['full_name'] ?></td>
                <td><?php echo $students['email_address'] ?></td>
                <td><?php echo $students['mobile_number'] ?></td>
                <td>
                    <a href="edit-student.php?id=<?php echo $students['id'] ?>">Edit</a>||



   <a href="?delete=true&id=<?php echo $students['id'] ; ?>"onclick="return confirm('Are you sure to delete this!!!')" ">Delete</a>
                </td>
                </tr><?php
            } ?>
        </table>
    </form>
</div>