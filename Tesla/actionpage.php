<?php 


session_start();    
error_reporting(0);
ini_set('display_errors', 0);
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
        if (isset($_POST['sform'])) {
            $Var = 'Model S';
            $image_url='assets/media/acs.jpg';
            $_SESSION['model']= 'Model S';

        } elseif (isset($_POST['xform'])) {
            $Var = 'Model X'; 
            $image_url='assets/media/acx.jpg';
            $_SESSION['model']= 'Model X';

        } elseif (isset($_POST['yform'])) {
            $Var = 'Model Y'; 
            $image_url='assets/media/acy.jpg';
            $_SESSION['model']= 'Model Y';

        } elseif (isset($_POST['3form'])) {
            $Var = 'Model 3'; 
            $image_url='assets/media/ac3.jpg';
            $_SESSION['model']= 'Model 3';

        }
      }

    
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="assets/media/tesla_logo_icon_169601.png">
    <link rel="stylesheet" href="assets/css/index.css" />
    <link rel="stylesheet" href="assets/css/variable.css" />
    <link rel="stylesheet" href="assets/css/header2.css" />
    <link rel="stylesheet" href="assets/css/navigation.css" />
    <link rel="stylesheet" href="assets/css/section.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.css"
        integrity="sha512-4rPgyv5iG0PZw8E+oRdfN/Gq+yilzt9rQ8Yci2jJ15rAyBmF0HBE4wFjBkoB72cxBeg63uobaj1UcNt/scV93w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>GSS-Tesla</title>
</head>

<body>

    <div class="blur-overlay"></div>

    <header class="header">
        <a href="index.php" class="left-header">
            <img src="assets/media/tesla_logo.svg" alt="logo" class="logo">
        </a>

        <ul class="middle-header">
            <li><a href="s.php" class="nav-btn">model s</a>
                <a href="3.php" class="nav-btn">model 3</a>
                <a href="x.php" class="nav-btn">model x</a>
                <a href="y.php" class="nav-btn">model y</a>
            </li>
        </ul>

        <div class="right-header">
            <a href="#" class="nav-btn menu-btn">menu</a>
        </div>
    </header>

    <nav class="navigation">
        <div class="close-btn-container">
            <img src="assets/media/close_icon.svg" alt="close button" class="close-btn">
        </div>

        <ul>
            <li class="middle-header-nav-link"><a href="#" class="nav-link">model s</a></li>
            <li class="middle-header-nav-link"><a href="#" class="nav-link">model 3</a></li>
            <li class="middle-header-nav-link"><a href="#" class="nav-link">model x</a></li>
            <li class="middle-header-nav-link"><a href="#" class="nav-link">model y</a></li>
            <li><a href="index.php" class="nav-link">home</a></li>
            <li><a href="table.php" class="nav-link">existing inventory</a></li>
            <li><a href="s.php" class="nav-link">model s</a></li>
            <li><a href="3.php" class="nav-link">model 3</a></li>
            <li><a href="x.php" class="nav-link">model x</a></li>
            <li><a href="y.php" class="nav-link">model y</a></li>
            <li><a href="#" class="nav-link">charging</a></li>
        </ul>
    </nav>

    <h1 style="text-align: center;margin-top: 35px;font-size: 50px;font-family: sans;">Book your TESLA</h1>


    <div class="grid-container2">
        <div class="grid-item2">
        <img src="<?php echo $image_url;?>" alt="" style="
    width: 100%;">
        </div>
        <div class="grid-item2">
            <h1 style="font-size: 50px;"><?php echo $Var; ?></h1>
        </div>
    </div>    

    <form class="row g-3 needs-validation" novalidate="" action="actionpage2.php" method="post"
    name="registration" style="width: 70%;position: relative;left: 14vw;right: 14vw;font-size: 20px;" onSubmit="return formValidation();">


   
        <div class="col-md-4" style="margin-bottom: 15vh;">
            <label for="validationCustom01" class="form-label">Name</label>
            <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Enter Name"required="" onkeyu>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4" style="margin-bottom: 15vh;">
            <label for="validationCustom02" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="validationCustom02" name="phoneno"
                placeholder="Enter your Phone No." required="">
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4" style="margin-bottom: 15vh;">
            <label for="validationCustom01" class="form-label">Email</label>
            <input type="text" class="form-control" id="validationCustom01" name="email" placeholder="Enter Email"
                required="">
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-6" style="margin-bottom: 15vh;">
            <label for="validationCustom03" class="form-label">City</label>
            <input type="text" class="form-control" id="validationCustom03" name="city" placeholder="Enter city"
                required="">
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-3" style="margin-bottom: 15vh;">
            <label for="validationCustom04" class="form-label">State</label>
            <select class="form-select" id="validationCustom04" name="state" required="">
                <option selected="" disabled="" value="">Choose...</option>
                <option>California</option>
                <option>Texas</option>
                <option>New York</option>
                <option>Pennsylvania</option>
                <option>Illinois</option>
                <option>Ohio</option>
                <option>Georgia</option>
                <option>North Carolina</option>
                <option>Michigan</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid state.
            </div>
        </div>
        <div class="col-md-3" style="margin-bottom: 15vh;">
            <label for="validationCustom05" class="form-label">Zip</label>
            <input type="text" class="form-control" id="validationCustom05" name="zip" required="">
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>

        <div class="col-12">
            <label for="" class="form-label">Color</label>

            <input type="radio" class="btn-check" name="options" id="option1" value="Red" autocomplete="off"
                style="float: right;">
            <label class="btn btn-secondary" for="option1"
                style="float: right; margin-right: 10px; background-color: red;"></label>

            <input type="radio" class="btn-check" name="options" id="option2" value="White" autocomplete="off"
                style="float: right;">
            <label class="btn btn-secondary" for="option2"
                style="float: right;margin-right: 10px;background-color: white; color:black;"></label>

            <input type="radio" class="btn-check" name="options" id="option3" value="Black" autocomplete="off"
                style="float: right;">
            <label class="btn btn-secondary" for="option3"
                style="float: right;margin-right: 10px;background-color: black;"></label>

            <input type="radio" class="btn-check" name="options" id="option4" value="Dark Blue" autocomplete="off"
                style="float: right;">
            <label class="btn btn-secondary" for="option4"
                style="float: right;margin-right: 10px;background-color: rgb(13, 13, 71);"></label>

            <input type="radio" class="btn-check" name="options" id="option5" value="Gray" autocomplete="off"
                style="float: right;">
            <label class="btn btn-secondary" for="option5"
                style="float: right;margin-right: 10px;background-color: rgb(94, 94, 94);"></label>
        </div>


        <div class="col-12">
            <label for="" class="form-label" style="margin-top: 35px;">Wheels</label>

            <img src="assets/media/tyre1.avif" alt="" style="width: 9vw; float: right;">
            <input type="radio" class="btn-check" name="wheel" id="wheel1" value="Tempest Wheels" autocomplete="off"
                style="float: right;">
            <label class="btn btn-secondary" for="wheel1"
                style="float: right; margin-right: 10px; margin-top: 35px;">Tempest Wheels</label>

            <img src="assets/media/tyre2.avif" alt="" style="width: 9vw; float: right; margin-right: 20px;">
            <input type="radio" class="btn-check" name="wheel" id="wheel2" value="Arachnid Wheels" autocomplete="off"
                style="float: right;">
            <label class="btn btn-secondary" for="wheel2"
                style="float: right;margin-right: 10px;margin-top: 35px;">Arachnid Wheels</label>

        </div>

        <div class="col-12">
            <label for="" class="form-label" style="margin-top: 35px;">Motor Pack</label>

            <h1 style="width: 9vw; float: right;margin-top: 27px;">Standard</h1>
            <input type="radio" class="btn-check" name="motor" id="motor1" value="Standard" autocomplete="off"
                style="float: right;">
            <label class="btn btn-secondary" for="motor1"
                style="float: right; margin-right: 10px; margin-top: 35px;">Dual Motor All-Wheel Drive</label>

            <h1 style="width: 9vw; float: right; margin-right: 20px;margin-top: 27px;">Plaid</h1>
            <input type="radio" class="btn-check" name="motor" id="motor2" value="Plaid" autocomplete="off"
                style="float: right;">
            <label class="btn btn-secondary" for="motor2" style="float: right;margin-right: 10px;margin-top: 35px;">Tri
                Motor All-Wheel Drive</label>

        </div>



        <div class="col-12" style="display: flex;justify-content: center;margin-top: 10vh;">
            <button class="btn btn-primary" type="submit" >Submit form</button>
        </div>
    </form>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
        <script>
        const menuBtn = document.querySelector('.menu-btn')
        const navigation = document.querySelector('.navigation')
        const navCloseBtn = document.querySelector('.close-btn')
        const blurOverlay = document.querySelector('.blur-overlay')
        const fullPageElement = document.getElementById('myfullpage')

        const IS_ACTIVE = 'is-active'
        const CLICK = 'click'

        //toggle navigation and blur overlay
        const toggleNavigation = () => {
            navigation.classList.toggle(IS_ACTIVE)
            blurOverlay.classList.toggle(IS_ACTIVE)
            fullPageElement.classList.toggle('no-scroll') /* Prevent fullpage scroll when navbar is-active */
        }
        menuBtn.addEventListener(CLICK, toggleNavigation)
        navCloseBtn.addEventListener(CLICK, toggleNavigation)
        blurOverlay.addEventListener(CLICK, toggleNavigation) 

        function change() {
            document.getElementById("chg").style.color = "black";
            document.getElementById("chg").style.backgroundColor = "white";
            document.getElementById("chg").style.borderColor = "black";
        }
        function change2(){
            document.getElementById("chg").style.color = "white";
            document.getElementById("chg").style.backgroundColor = "black";
        }
    </script>


<script>

</script>

    <script>
        function formValidation() {
    var uname = document.registration.name;        
    var passid = document.registration.phoneno;
    var uemail = document.registration.email;
    var uadd = document.registration.city;
    var ucountry = document.registration.state;
    var uzip = document.registration.zip;
        if (allLetter(uname)) {    
            if (allnumeric2(passid, 10)) {
                if (ValidateEmail(uemail)) {
                    if (alphanumeric(uadd)) {
                        if (countryselect(ucountry)) {
                             if (allnumeric(uzip,10)) {
                               return true;  
                                    
                            }
                        }
                    }
                }
            }
        }
    return false;

}


function userid_validation(uid, mx, my) {
    var uid_len = uid.value.length;
    if (uid_len == 0 || uid_len >= my || uid_len < mx) {
        document.getElementById('no').innerHTML = "error";
        //alert("User Id should not be empty / length be between " + mx + " to " + my);
        uid.focus();
        return false;
    }
    document.getElementById('no').innerHTML = "pass";
    return true;
}
function passid_validation(passid, mx, my) {
    var passid_len = passid.value.length;
    if (passid_len == 0 || passid_len >= my || passid_len < mx) {
        alert("Phone number should not be empty / length be between " + mx + " to " + my);
        passid.focus();
        return false;
    }
    return true;
}
function allLetter(uname) {
    var letters = /^[A-Za-z]+$/;
    if (uname.value.match(letters)) {
        return true;
    }
    else {
        alert('Name must have alphabet characters only');
        uname.focus();
        window.location.reload()
        return false;
    }
}
function alphanumeric(uadd) {
    var letters = /^[A-Za-z]+$/;
    if (uadd.value.match(letters)) {
        return true;
    }
    else {
        alert('City must have alphabet characters only');
        uadd.focus();
        return false;
    }
}
function countryselect(ucountry) {
    if (ucountry.value == "Default") {
        alert('Select your State from the list');
        ucountry.focus();
        return false;
    }
    else {
        return true;
    }
}
function allnumeric(uzip,mx) {
    var uzip_len = uzip.value.length;
    var numbers = /^[0-9]+$/;
    if(uzip_len == mx){
        if (uzip.value.match(numbers)) {
            return true;
        }
        else {
            alert('ZIP must have numeric characters only');
            uzip.focus();
            return false;
        }
    }
    else{
        alert("ZIP should not be empty / length should be " + mx);
        uzip.focus();
        return false;
    }
    
}


function allnumeric2(uzip,mx) {
    var uzip_len = uzip.value.length;
    var numbers = /^[0-9]+$/;
    if(uzip_len == mx){
        if (uzip.value.match(numbers)) {
            return true;
        }
        else {
            alert('Phone number must have numeric characters only');
            uzip.focus();
            return false;
        }
    }
    else{
        alert("Phone number should not be empty / length should be " + mx);
        uzip.focus();
        return false;
    }
    
}

function ValidateEmail(uemail) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (uemail.value.match(mailformat)) {
        return true;
    }
    else {
        alert("You have entered an invalid email address!");
        uemail.focus();
        return false;
    }
}



    </script>
</body>

</html>