<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Bank Of India</title>

  <link rel="stylesheet" type="text/css" href="css/index.css">

</head>

<body>
  <?php
  include 'nav.php';
  ?>


  <div class="container-fluid mt-4">
    <div class="myclass jumbotron">
      <h1 class="display-4">Welcome to Bank Of India</h1>
      <p class="lead">Smart way to bank.</p>
    </div>

  </div>


  <div class="container">
    <div class="row">
      <div class="col-lg-4 text-center">
        <img src="img/user.png" class="img-fluid">
        <br><br>
        <p><a class="btn btn-success" href="createuser.php" role="button">Create New User</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 text-center">
        <img src="img/money.png" class="img-fluid">
        <br><br>
        <p><a class="btn btn-success" href="transfermoney.php" role="button">Transfer Money</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 text-center">
        <img src="img/rupee.png" class="img-fluid">
        <br><br>
        <p><a class="btn btn-success" href="transactionhistory.php" role="button">Transaction History </a></p>
      </div>
    </div>
  </div>

  <br>
    <footer class="text-center fixed-bottom bg-dark text-white">
        <p>&copy 2021 Yashika Rawat | All Rights Reserved</p>
    </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>