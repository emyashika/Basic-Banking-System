<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Transaction History</title>

  <link rel="stylesheet" type="text/css" href="css/data.css">

</head>

<body>
  <?php
  include 'nav.php';
  ?>

  <div class="container">
    <div class="mt-5">
      <h2 class="text-center pt-4 myHead">Transaction History</h2>
    </div>

    <br>
    <div class="table-responsive-sm">
      <table class="table table-success table-hover table-striped table-sm">
        <thead>
          <tr>
            <th class="text-center">S.No.</th>
            <th class="text-center">Sender</th>
            <th class="text-center">Receiver</th>
            <th class="text-center">Amount</th>
            <th class="text-center">Date & Time</th>
          </tr>
        </thead>
        <tbody>
          <?php

          include 'config.php';

          $sql = "select * from transaction";

          $query = mysqli_query($conn, $sql);

          while ($rows = mysqli_fetch_assoc($query)) {
          ?>

            <tr style="color : black;">
              <td class="py-2"><?php echo $rows['sno']; ?></td>
              <td class="py-2"><?php echo $rows['sender']; ?></td>
              <td class="py-2"><?php echo $rows['receiver']; ?></td>
              <td class="py-2"><?php echo $rows['balance']; ?> </td>
              <td class="py-2"><?php echo $rows['date']; ?> </td>

            <?php
          }

            ?>
        </tbody>
      </table>

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