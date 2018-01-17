<?php
namespace App\classes;

class Banner
{

    public function getAllBannerInfo()
    {
        $sql = "SELECT * FROM banners";
        if (mysqli_query(Database::dbConnection(), $sql)) {
            $getResult = mysqli_query(Database::dbConnection(), $sql);
            return $getResult;
        } else {
            die('Query Error' . mysqli_error(Database::dbConnection()));
        }
    }

    public function saveBannerInfo($data)
    {
        $sql = "INSERT INTO banners (banner_title, banner_description, publication_status) VALUES ('$data[banner_title]','$data[banner_description]','$data[publication_status]')";

        if (mysqli_query(Database::dbConnection(), $sql)) {
            $bannerMessage = 'Banner information save successfully';
            return $bannerMessage;
        } else {
            die('Query problem' .mysqli_error(Database::dbConnection()));
        }
    }
    public function deleteBannerInfo($id){
        $sql = "DELETE FROM banners WHERE id = '$id' ";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $message = "Category info delete success";
            return $message;
        }else{
            die('Query problem'.mysqli_error(Database::dbConnection()));
        }
    }

    public function getBannerInfo($id){
        $sql = "SELECT * FROM banners WHERE id='$id'";
        if (mysqli_query(Database::dbConnection(), $sql)) {
            $getResult = mysqli_query(Database::dbConnection(), $sql);
            return $getResult;
        } else {
            die('Query Error' . mysqli_error(Database::dbConnection()));
        }
    }
    public function updateBanner($data,$id){
        $sql = "UPDATE banners SET banner_title = '$data[banner_title]', 	banner_description = '$data[banner_description]', publication_status = '$data[publication_status]' WHERE id = '$id'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            header('Location:manage-banner.php');
        }else{
            die('Query problem'.mysqli_error(Database::dbConnection()));
        }
    }


}