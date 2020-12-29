<?php
// Database connection

if(isset($_POST['submit'])){
    inserData();
}

function inserData(){
    include_once('db_config.php');
    $email= $_POST['email'];
    $password= $_POST['password'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];

    $insert_query = mysqli_query($con,"INSERT INTO users (email,password,address,mobile) values('$email','$password','$address','$mobile')");

    if($insert_query){
        header("location: fetch.php");
    }

}
?>






