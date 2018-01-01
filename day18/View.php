<?php

if (isset($_POST['btn'])){
    require_once 'Test.php';

    $test = new Test('Alomgir');

//$test->one();

    $res = $test->createOddEventSeries($_POST);
}







?>
<form action="" method="post">
    <table>
        <tr>
            <th>Starting Number</th>
            <td><input type="number" name="starting_number"></td>
        </tr>
        <tr>
            <th>Ending Number</th>
            <td><input type="number" name="ending_number"></td>
        </tr>
        <tr>
            <th>Your Choice</th>
            <td>
                <input type="radio" name="choice" value="odd"> Odd
                <input type="radio" name="choice" value="even"> Even
            </td>
        </tr>
        <tr>
            <th>Result</th>
            <td><textarea rows="5" cols="20"><?php $res ?></textarea></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="submit" name="btn"></td>
        </tr>
    </table>
</form>
