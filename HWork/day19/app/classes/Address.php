<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 1/6/2018
 * Time: 12:02 AM
 */

namespace App\classes;


class Address {
    public $firstName;
    private $lastName;
    protected $emailAddress;
    protected $address;

    function seveInfoUser($data){

        $con = mysqli_connect('localhost', 'root', '', 'php72');
        $fName = $data['last_name'];

        $sql = "INSERT INTO users( first_name, last_name, email_address, mobile_number,address) 
          VALUES ('$data[first_name]',' $fName','$data[email_address]','$data[mobile_number]','$data[address]')";
            $result = mysqli_query($con, $sql);
        if (!$result){
            die('Mysql Error'.mysqli_error($result));
        }
    }
}