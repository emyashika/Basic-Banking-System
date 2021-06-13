<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/createuser.css">

    <title>Create User</title>

</head>

<body>

    <?php
    include 'config.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $balance = $_POST['balance'];
        $sql = "insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script> alert('User is created !');
                        window.location='transfermoney.php';
              </script>";
        }
    }
    ?>

    <?php
    include 'nav.php';
    ?>

    <div class="container">
        <div class="myCard">
            

                
                    <div class="Ctn">
                        <form class="myForm text-center" method="post">
                            <header>Create New User</header>
                            <div class="form-group">
                                <i class="fa fa-user"></i>
                                <input class="myInput" placeholder="NAME" type="text" name="name" required>
                            </div>
                            <div class="form-group">
                                <i class="fa fa-envelope"></i>
                                <input class="myInput" placeholder="EMAIL" type="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <i class="fa fa-inr"></i>
                                <input class="myInput" placeholder="BALANCE" type="number" name="balance" required>
                            </div>

                            <input type="submit" class="btn btn-success" value="CREATE" name="submit">
                            <input type="reset" class="btn btn-danger" value="RESET" name="reset">

                        </form>
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