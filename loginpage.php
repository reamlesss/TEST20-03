<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php include 'navbar.php';?>

<div class="container d-flex justify-content-center align-items-center flex-column" style="height: 100vh">
    <h1 style="margin-bottom: 50px">Login</h1>
    <form action="login.php" method="post" id="login_form">
        <label for="login_username">Username:</label><br>
        <input type="text" id="login_username" name="username" required class="text-input"><br>
        <label for="login_password">Password:</label><br>
        <input type="password" id="login_password" name="password" required class="text-input"><br><br>
        <input type="submit" name="login" value="Login" class="btn btn-success" style="width: 200px">
        <div class="text-center"><a href="registerpage.php" >register</a></div>
    </form>


</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>