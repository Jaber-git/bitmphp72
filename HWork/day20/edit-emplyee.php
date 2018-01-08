
<?php
require_once 'vendor/autoload.php';
use App\classes\Emplyee;

$id =  $_GET['id'];

$viewEmplyee = Emplyee::viewEmplyeeData($id);

$viewResult = mysqli_fetch_assoc($viewEmplyee);

if (isset($_POST['btn'])){
    Emplyee::updateData($_POST, $id);
}



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
    }
    a:hover{
        background-color: #aadccc;
    }

</style>
<div class="container">
    <hr/>
    <a href="view-emplyees.php">View Emplyees</a>
    <hr/>
    <form action="" method="post">
        <table width="100%">
            <tr>
                <th>Emplyee Name </th>
                <td><input type="text" name="emplyees_name" id="emplyees_name" value="<?php echo $viewResult['emplyees_name']?>"></td>
            </tr>
            <tr>
                <th>Emplyee ID</th>
                <td><input type="text" name="emplyees_id" id="emplyees_id" value="<?php echo $viewResult['emplyees_id']?>"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" name="btn" id="btn" value="Update"></td>
            </tr>

        </table>
    </form>
</div>

