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

        $sql = "INSERT INTO students(full_name, email_address, mobile_number) VALUES  ('$name','$data[email_address]','$data[mobile_number]')";

        if(mysqli_query($link, $sql)){
            echo 'Student info save successfull';
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }
    public function getAllStudentInfo(){
        $link = mysqli_connect('localhost','root','', 'php72');
        $sql = "SELECT * FROM students";
        if (mysqli_query($link, $sql)){
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }
    public function getStudentinfoById($id){
        $link = mysqli_connect('localhost','root','', 'php72');
        $sql="SELECT * FROM students WHERE id='$id'";

        if (mysqli_query($link, $sql)){
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }

    public function updateStudentInfo($data, $id){
        $link = mysqli_connect('localhost','root','', 'php72');
        $sql="UPDATE students SET full_name='$data[full_name]',email_address='$data[email_address]',
mobile_number='$data[mobile_number]'WHERE id=$id";
        if (mysqli_query($link, $sql)){
            header('Location:view-students.php');
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }
    public function deleteStudentinfo($id){
        $link = mysqli_connect('localhost','root','', 'php72');
        $sql = "DELETE FROM students WHERE id='$id'";

        if (mysqli_query($link, $sql)){
            $message = "Student info delete success";
            return $message;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }

}