<?php

namespace App\classes;

use App\classes\Database;
class Categories
{
    public function getAllCategoryInfo()
    {
        $sql = "SELECT * FROM categories";
        if ($getResult = mysqli_query(Database::dbConnection(), $sql)) {
            mysqli_query(Database::dbConnection(), $sql);
            return $getResult;
        } else {
            die('Query Error' . mysqli_error($getResult));
        }
    }
}