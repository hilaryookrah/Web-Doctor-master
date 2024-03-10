<?php
include "../settings/connection.php";
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: ../login/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="icon" href="../img/logo/logo.png"/>

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/aos.css">
</head>

<body>
    <div class="site-wrap">

        <!--Navigation Bar-->
        <div class="site-navbar bg-light py-2">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <div class="site-logo">
                            <a href="home.php" class="js-logo-clone"><img src="../img/logo/logo.png" style="width:50px; border-radius:50px;" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="main-nav d-lg-block">
                        <nav class="site-navigation text-right text-md-center" role="navigation">
                            <ul class="site-menu js-clone-nav d-lg-block">
                                <li class="active"><a href="home.php">Home</a></li>
                                <li><a href="shop.php">Store</a></li>
                                <li class=""><a href="prescription.php">Prescription</a></li>
                                
                                <li><a href="aboutus.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                        <!-- Right Icons -->
          <div class="d-flex align-items-center justify-content-between">
            <?php
            if (isset($_SESSION['id'])) {
              echo "<div class='logout' style='margin-right:15px;'><a href='../actions/logout.php'>
            <img src='https://img.icons8.com/ios-glyphs/30/000000/export.png'/>
            </a></div>";
            } else {
              echo "<div class='login' style='margin-right:15px;'><a href='../login/login.php'>
            <img src='https://img.icons8.com/ios-glyphs/30/000000/import.png'/>
            </a></div>";
            } ?>
            <!-- cart -->
            <?php
            if (isset($_SESSION['id'])) {
              echo "<a href='cart.php'>
                <img style='margin-right:15px;' src='https://img.icons8.com/material-rounded/24/000000/shopping-cart.png'/>
                </a>";
            } else {
              echo "<a href='../login/login.php'>
                <img style='margin-right:15px;' src='https://img.icons8.com/material-rounded/24/000000/shopping-cart.png'/></a>";
            }
            ?>

            <div class="profile">
              <!-- profile -->
              <a href="
                        <?php
                        if (isset($_SESSION['id'])) {
                          echo "profile.php";
                        } else {
                          echo "../login/login.php";
                        }
                        ?>
                        "><img src="
                        <?php
                        if (isset($_SESSION['id'])) {
                          echo "../img/profile.jpg";
                        } else {
                          echo "../img/default_profile.jpg";
                        }
                        ?>
                        " alt="Image" class="rounded-circle" style="width:50px; border-radius:50px;"></a>
            </div>
          </div>
                </div>
            </div>
        </div>

        <!--Main Content-->
        <!--Image By: Photo by Alex Green: https://www.pexels.com/photo/pile-of-white-spilled-pills-5699514/-->
        <div class="site-blocks-cover" ">
        <!-- path -->
<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="home.php">Home</a> <span class="mx-2 mb-0">/</span><div class="col-md-12 mb-0"><a href="profile.php">Profile</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Edit Profile</strong></div>
        </div>
      </div>
    </div>    
        <div class="container">
                <form action="../actions/edit_profile.php" method="POST" class="was-validated">
                    <div class="row">
                        <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
                            <div class="site-block-cover-content text-center">
                                <div class="site-block-cover-content text-center text-dark" style="background: rgba(138,199,197,0.5); backdrop-filter:blur(10px);border: 1px #8ac7c5 solid; border-radius:5px; padding:4px;">

                                    <!--Profile page-->
                                    <h1 class="mb-0">Profile</h1>
                                    <!--error-->
                                    <div id="error"></div>

                                    <div class="row">
                                        <div class="col">
                                            <label for="uname">Username</label>
                                            <?php echo "<input type='text' id='uname' name='uname' class='form-control' value='" . $_SESSION['username'] . "' >" ?>
                                        </div>
                                        <div class="col">
                                            <label for="fname">First Name</label>
                                            <?php echo "<input type='text' id='fname' name='fname' class='form-control' value='" . $_SESSION['fname'] . "' >" ?>
                                        </div>
                                        <div class="col">
                                            <label for="lname">Last Name</label>
                                            <?php echo "<input type='text' id='lname' name='lname' class='form-control' value='" . $_SESSION['lname'] . "' >" ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="email">Email</label>
                                            <?php echo "<input type='text' id='email' name='email' class='form-control' value='" . $_SESSION['email'] . "' >" ?>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="phone">Phone</label>
                                            <?php echo "<input type='text' id='phone' name='phone' class='form-control' value='" . $_SESSION['phone'] . "' >" ?>
                                        </div>
                                        <div class="col">
                                            <label for="address">Address</label>
                                            <?php echo "<input type='text' id='address' name='address' class='form-control' value='" . $_SESSION['address'] . "' >" ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="pwd">Previous Password</label>
                                            <input type="password" id="opwd" name="opwd" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="pwd">Password</label>
                                            <input type="password" id="pwd" name="pwd" class="form-control" required>
                                        </div>
                                    </div>
                                


                                <div class="row">
                                    <div class="col">
                                        <label for="pwd">Re-enter Password</label>
                                        <input type="password" id="pwd2" class="form-control" required>
                                    </div>
                                </div>
                                <!--margin-->
                                <div class="mb-3" style="margin-bottom:30px;"></div>
                                <div class="row" padding-left="10px">
                                    <div class="col">
                                        <input type="submit" id="save_profile" class="btn btn-primary px-5 py-3" value="Save Profile">
                                    </div>

                                    <div class="col">
                                        <a href="profile.php" class="btn btn-primary px-5py-3">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
</body>
<script>
    var password = document.getElementById("pwd"),
        confirm_password = document.getElementById("pwd2");
    document.getElementById("save_profile").addEventListener("click", () => {
        if (password.value != confirm_password.value) {
            document.getElementById("error").innerHTML = "<div class='alert alert-danger' role='alert'>Passwords do not match</div>";
            event.preventDefault();
        } else {
            confirm_password.setCustomValidity('');
        }
    });
</script>

</html>