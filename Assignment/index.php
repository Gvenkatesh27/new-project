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
    <link rel="stylesheet" href="style.css">
</head>

<?php  ?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form class="myform" action="./server.php" method="POST">
                <h2><b>ADD NEW EMPLOYEE</b></h2>
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
    </div>
</body>

</html>
