<?php

require_once 'Example.php';
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 1/1/2018
 * Time: 1:48 PM
 */

class Test extends Example {
    public $name='Mosiur Raham';
    public $city='Dhaka';
    public $country='Bangladesh';

    public $data;

    function __construct($value)
    {
        $this->data = $value;
    }

    public function one(){
        echo $this->data;
        echo '<br>';
         $this->five();
        echo '<br>';
         $this->three();

    }
    protected function two(){
        echo $this->data;
    }
    private function three(){
        echo $this->data;
    }

    public function createOddEventSeries($data){
        echo '<pre>';
        print_r($data);

        $starting_number =  $data['starting_number'];
        $ending_number = $data['ending_number'];
        $choice = $data['choice'];
        $res='';

//        if (isset($data['btn'])){
//            if ($starting_number<=$ending_number && $choice == 'even'){
//                for ($i=$starting_number; $i<$ending_number; $i++){
//                    if ($i%2==0){
//                        echo $i.' ';
//                    }
//                }
//            }elseif ($starting_number<$ending_number && $choice == 'odd'){
//                    for ($i=$starting_number; $i<=$ending_number; $i++){
//                        if ($i%2==0){
//                            echo $i.' ';
//                        }
//                    }
//            }
//        }
        for ($i=$starting_number; $i<$ending_number; $i++){
            if ($choice=='odd'){
                if ($i%2!=0){
                    echo $res .=$i.' ';
                }
            }else if ($choice=='even'){
                if ($i%2==0){
                    echo $res .=$i.' ';
                }
            }
        }
        return $res;
    }

}

//composer class file k automaticaly load korte pare