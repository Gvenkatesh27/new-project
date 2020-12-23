<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
       <h2><b>LIST OF ALL EMPLOYEE</b></h2>
    <?php
        include_once('db_config.php');
        
        $fetch_query =  mysqli_query($con,"select * from store");
        $query_rows = mysqli_num_rows($fetch_query);
        

        if($query_rows > 0){
            echo "<table class='table table-bordered'><tr><th>id</th><th>name</th><th>fathername</th><th>emailid</th><th>phonenumber</th><th>address</th></tr>";
            while($row = mysqli_fetch_array($fetch_query)){ 
                echo "<tr><td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['fathername']."</td>";
                echo "<td>".$row['emailid']."</td>";
                echo "<td>".$row['phonenumber']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td> <a href='./delete.php?id=".$row['id']."'><button class='btn btn-danger'>Delete</button></a> <a href='./edit.php?id=".$row['id']."'> <button class='btn btn-success'>Edit</button></a> <a href='./details.php?id=".$row['id']."'> <button class='btn btn-success'>details</button></a></td></tr>";
            }
            echo "</table>";
            
        }else{
            echo "No Data found";
        }
    ?>
</body>
</html>