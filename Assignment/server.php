<?php


if(isset($_POST['submit'])){
    inserData();
}

function inserData(){
    include_once('db_config.php');
    $id= $_POST['id'];
    $name = $_POST['name'];
    $fathername = $_POST['fathername'];
    $emailid = $_POST['emailid'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    
    $ins_query = mysqli_query($con, "INSERT INTO store (id,name,fathername,emailid,phonenumber,address) VALUES ('$id','$name','$fathername','$emailid','$phonenumber','$address')");
    
   if($ins_query){
       header("location: fetch.php");
   }
}






?>
