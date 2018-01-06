<?php

namespace App\classes;

//namespace App\classes; it's vertual direactory


class Student
{
    public function saveStudentInfo($data){
//        echo '<pre>';
//        print_r($data);
        $name = $data['full_name'];

    $link = mysqli_connect('localhost','root','', 'php72');
//
//echo '<pre>';
//print_r($data);

        $sql = "INSERT INTO students(full_name, email_address, mobile_number) VALUES ('$name','$data[email_address]','$data[mobile_number]')";

        if(mysqli_query($link, $sql)){
            echo 'Student info save successfull';
        }else{
            die('Query problem'.mysqli_error($link));
        }

    }

}