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
  
  <title>Transfer Money</title>

  <link rel="stylesheet" type="text/css" href="css/data.css">

</head>

<body>

  <?php
  include 'config.php';
  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn, $sql);
  ?>

  <?php
  include 'nav.php';
  ?>

  <div class="container">
    <div class="mt-5">
      <h2 class="text-center pt-4 myHead">Transfer Money</h2>
    </div>
    <br>
    <div class="row">
      <div class="col">
        <div class="responsive-sm">
          <table class="table table-success table-striped table-hover table-sm">
            <thead>
              <tr>
                <th scope="col" class="text-center py-2">ID</th>
                <th scope="col" class="text-center py-2">Name</th>
                <th scope="col" class="text-center py-2">E-Mail</th>
                <th scope="col" class="text-center py-2">Balance</th>
                <th scope="col" class="text-center py-2">Transact</th>
              </tr>

            <tbody>

              <?php
              while ($rows = mysqli_fetch_assoc($result)) {
              ?>
                <tr style="color : black;">
                  <td class="py-2"><?php echo $rows['id'] ?></td>
                  <td class="py-2"><?php echo $rows['name'] ?></td>
                  <td class="py-2"><?php echo $rows['email'] ?></td>
                  <td class="py-2"><?php echo $rows['balance'] ?></td>
                  <td><a href="transaction.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="btn btn-success">Select</button></a></td>
                </tr>
              <?php
              }
              ?>

            </tbody>

            </tbody>
          </table>
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