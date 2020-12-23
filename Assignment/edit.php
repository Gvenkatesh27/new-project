<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<?php

include_once('db_config.php');




$edit_id = $_GET['id'];
if($edit_id != NULL){
    $fetch_query = mysqli_query($con,"select * from store where id=$edit_id");
    $query_rows = mysqli_num_rows($fetch_query);
    if($query_rows>0){
       $row =  mysqli_fetch_array($fetch_query);
       echo '<div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form class="myform" action="./edit_data.php?id='.$edit_id.'" method="POST">
                <h2>list of all employee</h2>
                <input type="text" name="id" class="id form-control" placeholder="id">
                <input type="text" name="name" class="name form-control" placeholder="name">
                <input type="text" name="fathername" class="fathername form-control" placeholder="fathername">
                <input type="text" name="emailid" class="emailid form-control" placeholder="emailid">
                <input type="text" name="phonenumber" class="phonenumber form-control" placeholder="phonenumber">
                <input type="text" name="address" class="address form-control" placeholder="address">
                
                <input type="submit" value="create new" name="submit" class="btn btn-primary login_btn" id="myloginbtn">
                </form>
            </div>
        </div>
    </div>';
    }else{
        echo "Invalid User selection";
    }
}else{
    echo "Invalid URL";
}


?>
    
</body>
</html>
