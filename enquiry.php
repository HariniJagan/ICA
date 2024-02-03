<?php include('index.html');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <style>
  
    body{
        background-image:url(2.jpg);
        background-position: center;
        background-size: cover;
        height: 100vh;
        background-repeat: no-repeat;
    }
    .form2{
        margin-left: 20%;
        margin-top: 3%;
    }

    @media only screen and (max-width: 831px) {
        .form2{
        margin-left: 6%;
        margin-top: 15%;
    }
    }
    @media only screen and (max-width: 415px) {
        .form2{
        margin-left: 1%;
        margin-top: 17%;
    }
    }
  </style>
</head>
<body>
    <div class="container">
        <div class="form2">
        <div class="row">
        <?php include('infoform.php'); ?>
        </div>
       
        </div>
    </div>
</body>
</html>
<?php include('footer.php'); ?>