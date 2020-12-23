<?php


if(isset($_POST['submit'])){
    inserData();
}


function inserData(){
    $edit_id = $_GET['id'];
    include_once('db_config.php');
    $id= $_POST['id'];
    $name = $_POST['name'];
    $fathername = $_POST['fathername'];
    $emailid = $_POST['emailid'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    
    $ins_query = mysqli_query($con, "UPDATE store
    SET id = '$id',name = '$name', fathername= '$fathername',emailid = '$emailid', phonenumber= '$Phonenumber',address= '$address'
    WHERE id = $edit_id");
    
    if($ins_query){
        header("location: fetch.php");
    }
}






?>
