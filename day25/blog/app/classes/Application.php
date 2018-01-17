<?php

namespace App\classes;

use App\classes\Database;
class Application
{
    public function getAllPublishedBlogInfo(){
        $sql = "SELECT * FROM blogs WHERE  publication_status = 1";
        if (mysqli_query(Database::dbConnection(),$sql)){
            $queryResult = mysqli_query(Database::dbConnection(),$sql);
            return $queryResult;
        }else{
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }
    }

    public function getBlogDetails($id) {

        $sql = "SELECT * FROM blogs WHERE id = '$id'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult =  mysqli_query(Database::dbConnection(),$sql);
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error(Database::dbConnection()));
        }
    }

    public function getBannerContent()
    {
        $sql = "SELECT * FROM banners WHERE publication_status = 1";
        if (mysqli_query(Database::dbConnection(), $sql)) {
            $getBannerResult = mysqli_query(Database::dbConnection(), $sql);
            return $getBannerResult;
        } else {
            die('Query Error' . mysqli_error(Database::dbConnection()));
        }
    }
}