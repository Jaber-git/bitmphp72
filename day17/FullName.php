<?php

class FullName{


    function makeFullName($data){

        $firstName = $data['firstName'];
        $lastName = $data['lastName'];
        $fullName = $firstName.' '.$lastName;

        $returnValue=[];

        return $returnValue;
    }

    function seriseNumber($data){
        $startNumber = $data['startNumber'];
        $lastNumber = $data['lastNumber'];


        $result = 0;
        if ($startNumber<=$lastNumber){
            for ($i=$startNumber; $i<=$lastNumber; $i++){
                $result += $i;
            }
            return $result;
        }else{
            for ($i=$startNumber; $i>=$lastNumber; $i--){
                $result += $i;
            }
            return $result;
        }

    }
}

