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
        $fetch_query =  mysqli_query($con,"select * from users");
        $query_rows = mysqli_num_rows($fetch_query);
        

        if($query_rows > 0){
            echo "<table class='table table-bordered'><tr><th>email</th><th>password</th><th>address</th><th>mobile</th></tr>";
            while($row = mysqli_fetch_array($fetch_query)){ 
                echo "<tr><td>".$row['email']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>".$row['mobile']."</td>";
            
            }
            echo "</table>";
            
        }else{
            echo "No Data found";
        }
    ?>
    
</body>
</html>