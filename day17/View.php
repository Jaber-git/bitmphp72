
<?php

require_once 'FullName.php';

echo '<pre>';
print_r($_POST);

$result='';

if(isset($_POST['btn'])){
    $fullName= new FullName();

    $result = $fullName->makeFullName($_POST);
}


?>

<form action="" method="post">
    <table>
        <tr>
            <th>First Name</th>
            <td><input type="text" name="firstName" id="firstName" placeholder="First Name"></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><input type="text" name="lastName" id="lastName" placeholder="Last Name"></td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><input type="text" name="" value="<?php echo $result?>" id="fullName" placeholder="Full Name"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" id="btn" value="Submit"></td>
        </tr>

    </table>
</form>