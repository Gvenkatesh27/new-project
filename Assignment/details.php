<?php 

include_once('fetch.php');

$user_id = $_GET['id'];
if($user_id != NULL){
    $detail_query = mysqli_query($con,"DETAILS FROM store WHERE id=$user_id");
    if($detail_query){
        header("location: fetch.php");
    }
    else{
        echo "DETAILS FOUND";
    }
}
?>