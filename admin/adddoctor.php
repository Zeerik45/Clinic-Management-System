<?php

include_once '../source/session.php';

?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- Site Metas -->
<title>Add Doctors</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- Site Icons -->
<link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="../style.css">
<!-- Colors CSS -->
<link rel="stylesheet" href="../css/colors.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="../css/versions.css">
<link rel="stylesheet" href="../css/outbreak.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="../css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="../css/custom.css">
<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>
</head>

<body>
    <header>
        <div class="header-bottom wow fadeIn">
            <div class="container">
                <nav class="main-menu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                    </div>
                    <!--header-->
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a data-scroll href="home.php">Home</a></li>
                            <li><a class="active" href="adddoctor.php">Add Doctors</a></li>
                            <li><a data-scroll href="doctorrecords.php">Doctors</a></li>
                            <li><a data-scroll href="patients.php">Patients</a></li>
                            <li><a data-scroll href="addoutbreak.php">OutBreaks</a></li>
                            <li><a data-scroll href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <center>
     

        <form action="addoutbreak.php" method="post">
        <h1 class="myh1">Add Doctor</h1>
            <label class="mylabel">First Name:</label>
            <input type="text" class="myinput" name="Fname" class="input-box"  required>
            <br>
            <label class="mylabel">Last Name:</label>
            <input type="text" class="myinput" name="Lname" class="input-box" required>
            <br>
            <label class="mylabel">Email:</label>
            <input type="text" class="myinput" name="email" class="input-box"  required>
            <br>
            <label class="mylabel">Phone:</label>
            <input type="text" class="myinput" name="phone" class="input-box"  required>
            <br>
            <label class="mylabel">Designation:</label>
            <input type="text" class="myinput" name="designation" class="input-box" required>
            <br>
            <label class="mylabel">Address:</label>
            <input type="text" class="myinput" name="address" class="input-box"  required>
            <br>
            <label class="mylabel"for="gender">Gender:</label>
            <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            </select>
            
            <br>
            <button type="submit" >Add Doctor</button>
        </form>
        </center>

</body>
<?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

    <?php else: ?>

    <?php endif ?>

</html>