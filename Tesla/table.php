<?php
  
$conn = new mysqli("localhost", "root", "", "tesla");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  

// SQL query to select data from database
$sql = "SELECT * FROM inventory";
$result = $conn->query($sql);
$conn->close(); 
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/media/tesla_logo_icon_169601.png">
    
    <link rel="stylesheet" href="assets/css/header.css" />

   

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body style="background-image: url(assets/media/bg4.jpg); background-repeat: no-repeat; background-position: center; background-size: cover;">

    <div class="blur-overlay"></div>

    <header class="header">
        <a href="index.php" class="left-header">
            <img src="assets/media/tesla_logo.svg" alt="logo" class="logo">
        </a>
    </header>

   


    <h1 style="text-align: center;font-family: lato;font-size: 5vw;color: white;">Inventory</h1>
    <div>
        <table class="table table-borderless " style="text-align: center;margin-left: 15vw;margin-right: 15vw;width: 70%;/*! height: 23px; */margin-top: 12vh; color: white;font-size: 20px;">
        <thead>
          <tr>
            <th scope="col">Models</th>
            <th scope="col">Stock units</th>
          </tr>
        </thead>
        <tbody>
          <?php   
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <td><?php echo $rows['model'];?></td>
                <td><?php echo $rows['number'];?></td>
            </tr>
            <?php
                }
             ?>
        </tbody>
      </table>
    </div>
    
    <div style="text-align: center;">
        <a href="index.php"><button type="button" class="btn btn-outline-secondary" style="width: 23vw;">Home</button></a>
    </div>
      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>