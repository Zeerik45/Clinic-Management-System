<!DOCTYPE html>
<html>

<head>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <title>Staff Login</title>
    <link rel="stylesheet" href="../css/styles.css">


<?php

require_once '../source/session.php';
require_once '../source/db_connect.php';

if (isset($_POST['login-btn'])) {

    $user = $_POST['user-name'];
    $password = $_POST['user-pass'];

    try {
        $SQLQuery = "SELECT * FROM users WHERE username = :username";
        $statement = $conn->prepare($SQLQuery);
        $statement->execute(array(':username' => $user));

        while ($row = $statement->fetch()) {
            $id = $row['id'];
            $hashed_password = $row['password'];
            $username = $row['username'];

            if (password_verify($password, $hashed_password)) {
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;
                header('location: ../doctor/home.php');
            } else {
                header('location: stafflogin.php?error=Invalid Username or Password');

            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}

?>

</head>

<body><center><h1>Staff Login</h1></center>
<main>
<div class="wrapper">
    <form action="../Logins/stafflogin.php" method="post">
       <img src="../images/flat.jpg" alt=""class="img-fluid">
        <input type="text" name="user-name" class="input-box" placeholder="Username" required>
        <br>
        <input type="password" name="user-pass" class="input-box" placeholder="Password" required>
        <br>
        <?php if (isset($_GET['error'])) {
    echo 'Invalid Username or Password';
}
?>
        <br>
        <button type="submit" class="login" name="login-btn">Login</button>
        <br>

       <span> <a href="forgot.php" class="ca">Forgot Password??</a></span>

    </form>

    </div >
    </main>

</body>

</html>