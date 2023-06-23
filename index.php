<?php
session_start();
//var_dump($_SESSION);
if (isset($_POST['add'])) {

  if (isset($_SESSION['cart'])) {

    $session_array_id = array_column($_SESSION['cart'],"id");

    if (!in_array($_GET['id'], $session_array_id)) {

      $session_array = array(
        'id' => $_GET['id'],
        "name" => $_POST['name'],
        "price" => $_POST['price'],
        "quantity" => $_POST['quantity']
      );

      $_SESSION['cart'][] = $session_array;
    }
  } else {
    $session_array = array(
      'id' => $_GET['id'],
      "name" => $_POST['name'],
      "price" => $_POST['price'],
      "quantity" => $_POST['quantity']
    );

    $_SESSION['cart'][] = $session_array;
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="Style_galv/Styly.css">
  <link rel="icon" href="icons/favicon.ico" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Каталог</title>
</head>

<!--header-->
<?php
if (!isset($_SESSION['user'])) {
  require 'elements/header.php';
} else {
  require 'elements/header_session.php';
}
?>

<!--main_block-->
<body class="d-flex flex-column min-vh-100 container">

  <div class="col-md-12">
    <div class="row">
      <h2>Каталог</h2>
      <div class="col-md-12">
        <div class="row text-center">

          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "My_shop";

          $conn = mysqli_connect($servername, $username, $password, $dbname);

          $query = "SELECT * FROM products";
          $result = mysqli_query($conn, $query);

          while ($row = mysqli_fetch_array($result)) { ?>
            <div class="col-md-3 mt-4">
              <form method="post"  action="index.php?id=<?= $row['id'] ?>">                
                <img src="<?= $row['images'] ?>">                
                <!-- <h5 class="text-center">id:<?= $row['id'];  ?></h5> --> 
                <!-- <h5><?= $row['name'];  ?></h5>  -->
                <h5>Бренд: <?= $row['brand_name']; ?></h5> 
                <div class="d-grid gap-2"> 
                  <input type="hidden" name="name" value="<?= $row['name'] ?>">
                  <input type="hidden" name="price" value="<?= $row['price'] ?>">

                  <?php 

                  if ($_SESSION['user']) {
                    echo "<h6>Цена: ".number_format($row['price'], 2)." ₽</h6>";
                    echo "<input type='number' name='quantity' value='1' class='form-control'>";
                    echo "<input type='submit' name='add' class='btn btn-warning' value='Добавить в карзину'>";                    
                  }else {

                  }

                ?>             
              </div>
            </form>
          </div>
        <?php }  
        mysqli_close($conn);          
        ?>
      </div>
    </div>
  </div>
</div>

</body>

<?php
require 'elements/footer.php';
?>


</html>