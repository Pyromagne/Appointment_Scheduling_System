<?php
    ini_set("display_errors", "1");
    error_reporting(E_ALL);

    session_start();

    if(isset($_SESSION["user"])){
        if(($_SESSION["user"])=="")
        {
            header("location: index.php");
        }else
        {
            $useremail=$_SESSION["user"];
        }

    }else
    {
        header("location: index.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
        <link rel="stylesheet"  href="style.css">
    </head>

    <body class="dash">
        <nav class="def-nav">
            <br>
            <p class="emphasis wt">Dashboard</p>
            <button onclick="location.href = 'log-out.php';" class="default-btn">Log Out</button>
        </nav>
        <section class="def-dash">


        </section>
    </body>


</html>