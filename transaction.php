<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $from = $_GET['id'];
    $get = $_POST['get'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn, $sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * from users where id=$get";
    $query = mysqli_query($conn, $sql);
    $sql2 = mysqli_fetch_array($query);


    if (($amount) < 0) {
        echo "<script> alert('Invalid Value !');
                           </script>";
    } else if ($amount == 0) {
        echo "<script> alert('Zero value cannot be transferred !');
                           </script>";
    } else if ($amount > $sql1['balance']) {
        echo "<script> alert('Insufficient Balance !');
                           </script>";
    } else {
        $newbalance = $sql1['balance'] - $amount;
        $sql = "UPDATE users set balance=$newbalance where id=$from";
        mysqli_query($conn, $sql);

        $newbalance = $sql2['balance'] + $amount;
        $sql = "UPDATE users set balance=$newbalance where id=$get";
        mysqli_query($conn, $sql);

        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "<script> alert('Transaction is Successful !');
                                     window.location='transactionhistory.php';
                           </script>";
        }

        $newbalance = 0;
        $amount = 0;
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/transactiondetail.css">
    <link rel="stylesheet" type="text/css" href="css/data.css">


    <title>Transaction</title>
</head>

<body>

    <?php
    include 'nav.php';
    ?>



    <div class="container">
        <div class="myCard">
            <div class="row">

                <div class="col-md-5">
                    <div class="leftCtn">
                        <div class="box">
                            <header>
                                Bank Of India
                            </header>
                            <p>Smart way to bank</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="rightCtn">
                        <?php
                        include 'config.php';
                        $sid = $_GET['id'];
                        $sql = "SELECT * FROM  users where id=$sid";
                        $result = mysqli_query($conn, $sql);
                        if (!$result) {
                            echo "Error : " . $sql . "<br>" . mysqli_error($conn);
                        }
                        $rows = mysqli_fetch_assoc($result);
                        ?>
                        <form method="post" name="tcredit" class="tabletext"><br>
                            <div>
                                <label><b>Sender</b></label>
                                <table class="table table-sm">
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Balance</th>
                                    </tr>
                                    <tr>
                                        <td class="py-2"><?php echo $rows['id'] ?></td>
                                        <td class="py-2"><?php echo $rows['name'] ?></td>
                                        <td class="py-2"><?php echo $rows['email'] ?></td>
                                        <td class="py-2"><?php echo $rows['balance'] ?></td>
                                    </tr>
                                </table>
                            </div>
                            <label><b>Receiver</b></label>
                            <select name="get" class="form-control" required>
                                <option value="" disabled selected>Receiver</option>
                                <?php
                                include 'config.php';
                                $sid = $_GET['id'];
                                $sql = "SELECT * FROM users where id!=$sid";
                                $result = mysqli_query($conn, $sql);
                                if (!$result) {
                                    echo "Error " . $sql . "<br>" . mysqli_error($conn);
                                }
                                while ($rows = mysqli_fetch_assoc($result)) {
                                ?>
                                    <option class="table" value="<?php echo $rows['id']; ?>">

                                        <?php echo $rows['name']; ?> (Balance:
                                        <?php echo $rows['balance']; ?> )

                                    </option>
                                <?php
                                }
                                ?>
                                <div>
                            </select>
                            <label><b>Enter Amount</b></label>
                            <input type="number" class="form-control" name="amount" required>

                            <div class="text-center mt-5">
                                <button class="btn btn-success" name="submit" type="submit" id="myBtn">Transfer</button>
                            </div>
                        </form>
                    </div>
                </div>
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