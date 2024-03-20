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
    <h1 style="margin-bottom: 50px">Vlastnene zvirata</h1>

    <ul class="list-group">
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "trapovejgulas";
        $dbname = "zvirata";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        $sql = "SELECT nazev FROM zvire WHERE vlastneno = TRUE";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                echo '<li class="list-group-item" style="width: 200px">' . $row["nazev"] . '</li>';
            }
        } else {
            echo "Nebyla nalezena žádná vlastněná zvířata.";
        }

        $conn->close();
        ?>

        <div class="container d-flex justify-content-center" style="margin-top: 50px">
        <a href="wish-list.php"><button class="btn btn-success">WishList</button></a>
        </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>