
<?php

session_start();    
error_reporting(0);
ini_set('display_errors', 0);


$username = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phoneno"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$carmodel = $_SESSION['model'];
$date = date("Y/m/d");
$time = date('H:i:s');

echo $date;


if(isset( $_POST['options']) && isset( $_POST['wheel']) && isset( $_POST['motor'])){    
    $color = $_POST["options"];
    $wheel = $_POST["wheel"];
    $motor = $_POST["motor"];      
    $show = 1;


$conn = new mysqli("localhost", "root", "", "tesla");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$s = "SELECT * FROM users WHERE name = '$username'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);



    $reg2 = "INSERT into users(name,email,phoneno,city,orderdate,ordertime,model) VALUES ('$username','$email','$phone','$city','$date', '$time', '$carmodel') ";
    mysqli_query($conn,$reg2);
    echo"Registration Successful!!!";
    $show = 1;

    $reg = "UPDATE inventory SET number = number - 1 WHERE model = '$carmodel';";
    mysqli_query($conn,$reg);
    

$conn->close();

}  

else{
    echo "bad";
    $show = 0;
}

?>



<?php if($show == 1) : ?>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>GSS-Tesla</title>
    <link rel="icon" type="image/x-icon" href="assets/media/tesla_logo_icon_169601.png">
  </head>
  <body style="background-image: url(assets/media/bg4.jpg); background-repeat: no-repeat; background-position: center; background-size: cover;">
    <h1 style="text-align: center;font-family: lato;font-size: 4vw;color: white;">Booking Confirmed</h1>
    <div>
        <table class="table table-borderless " style="text-align: center;margin-left: 15vw;margin-right: 15vw;width: 70%;/*! height: 23px; */ color: white;font-size: 20px;">
          <tr>
            <th scope="col">Details</th>
            <th scope="col">Information</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Name</td>
            <td><?php echo $username; ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?php echo $email; ?></td>
          </tr>
          <tr>
            <td>State</td>
            <td><?php echo $state; ?></td>
          </tr>
          <tr>
            <td>City</td>
            <td><?php echo $city; ?></td>
          </tr>
          <tr>
            <td>ZIP</td>
            <td><?php echo $zip; ?></td>
          </tr>
          <tr>
            <td>Model</td>
            <td><?php echo $_SESSION['model']; ?></td>
          </tr>
          <tr>
            <td>Color</td>
            <td><?php echo $color; ?></td>
          </tr>
          <tr>
            <td>Wheel</td>
            <td><?php echo $wheel; ?></td>
          </tr>
          <tr>
            <td>Battery Pack</td>
            <td><?php echo $motor; ?></td>
          </tr>
        </tbody>
      </table>
    </div>
    
    <div style="text-align: center;">
        <a href="index.php"><button type="button" class="btn btn-outline-secondary" style="width: 23vw;">Confirm Booking</button></a>
    </div>
      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

<?php elseif($show == 0) : ?>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 style="text-align: center;font-family: lato;">OOPS!!<br>We think you haven't configured your car fully</h1>
  
    
    <div style="text-align: center;">
        <a href="actionpage.php"><button type="button" class="btn btn-outline-secondary" style="width: 23vw;">Go Back to Configure</button></a>
    </div>
      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
<?php endif; ?>

