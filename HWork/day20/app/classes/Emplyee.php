<?php
/**
 * Created by PhpStorm.
 * User: Codemen_PC
 * Date: 1/8/2018
 * Time: 11:12 AM
 */

namespace App\classes;


class Emplyee {


    public function dataInsert($data){



        $dataBaseConnect = mysqli_connect('localhost','root','','php72');

        $insertEmplyee = "INSERT INTO emplyees(emplyees_name, emplyees_id) VALUES ('$data[emplyees_name]','$data[emplyees_id]')";

        if ($query = mysqli_query($dataBaseConnect, $insertEmplyee)){
            header('Location:view-emplyees.php');
        }else{
            echo 'Mysql Error'.mysqli_error($query);
        }
    }

    public function viewData(){
        $dataBaseConnect = mysqli_connect('localhost','root','','php72');

        $dataSelect = "SELECT * FROM emplyees";

        if ($query = mysqli_query($dataBaseConnect, $dataSelect)){
            return $query;
        }else{
            echo 'Mysql Error'.mysqli_error($query);
        }
    }

    public function viewEmplyeeData($getId){
        $dataBaseConnect = mysqli_connect('localhost','root','','php72');

        $dataSelect = "SELECT * FROM emplyees WHERE id=$getId";

        if ($viewEmplyee = mysqli_query($dataBaseConnect, $dataSelect)){
            return $viewEmplyee;
        }else{
            echo 'Mysql Error'.mysqli_error($viewEmplyee);
        }
    }

    public function updateData($data, $id){

        $dataBaseConnect = mysqli_connect('localhost','root','','php72');

        $updateData = "UPDATE emplyees SET emplyees_name='$data[emplyees_name]', emplyees_id='$data[emplyees_id]' WHERE id=$id";

        if (mysqli_query($dataBaseConnect, $updateData)){

            header('Locatin:view-emplyees.php');

        }else{
            echo 'Mysql Error'.mysqli_error();
        }
    }


}