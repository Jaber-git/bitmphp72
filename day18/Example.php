<?php

/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 1/1/2018
 * Time: 1:53 PM
 */
class Example
{
    public $mobile = '01715478954';
    protected $district='Laxmipur';
    private $division='Noakhali';

    public function four(){
        echo 'In four';
    }
    protected function five(){
        echo 'In five';
    }
    private function six(){
        echo 'In six';
    }
}