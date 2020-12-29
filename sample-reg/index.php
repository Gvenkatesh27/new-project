<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php    ?>
<body class ="back-image">
    <div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <form class="myform" action="./server.php" method="POST">
              <h2><b>login form</b></h2>
              <input type="text" name="email" class="email form-control" placeholder="email">
              <input type="text" name="password" class="password form-control" placeholder="password">
              <input type="text" name="address" class="address form-control" placeholder="address">
              <input type="text" name="mobile" class="mobile form-control" placeholder="mobile">
              <input type="submit" value="login" name="submit"  class="btn btn-primary login-btn" id="mylogin btn">
            </form>
          </div>
        </div>
      </div>
    </div>
</body>
</html>