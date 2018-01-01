
<?php

$result = ' ';

if (isset($_POST['btn'])){

    require_once 'FullName.php';

    $fullName = new FullName();

    $result = $fullName->seriseNumber($_POST);


}

?>

<form action="" method="post">
    <table>
        <tr>
            <th>Starting Number</th>
            <td><input type="number" name="startNumber" id="startNumber" placeholder="Starting Number"></td>
        </tr>
        <tr>
            <th>Ending Number</th>
            <td><input type="number" name="lastNumber" id="lastNumber" placeholder="Ending Number"></td>
        </tr>
        <tr>
            <th>Result</th>
            <td><textarea name="" id="result" placeholder="Result"><?php echo $result; ?></textarea></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" id="btn" value="Click"></td>
        </tr>

    </table>
</form>