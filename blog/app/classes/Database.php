<?php

namespace App\classes;


class Database
{
    public function dbConnection(){
        $localhost = 'localhost';
        $userName = 'root';
        $password = '';
        $bdName = 'blog72';

        $link = mysqli_connect($localhost, $userName, $password, $bdName);
        return $link;
    }
}