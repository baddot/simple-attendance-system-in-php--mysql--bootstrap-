<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Attendance System</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<<<<<<< HEAD
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
=======
>>>>>>> a0d5860fa5408103ce79b8b6fa9ab23730e6f54f
    <link rel="stylesheet" href="css.css" type="text/css">
    <script src="js.js"></script>
</head>
<body>

<<<<<<< HEAD
<?php
require("db-connect.php");
=======
<?php require("db-connect.php");
>>>>>>> a0d5860fa5408103ce79b8b6fa9ab23730e6f54f
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="center-form">
<<<<<<< HEAD
=======

>>>>>>> a0d5860fa5408103ce79b8b6fa9ab23730e6f54f
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <?php

                if(!isset($_COOKIE['login'])) {
                    header('Location: login.php');
                }
                else{
                    if(($_COOKIE['login']) == 1 && ($_COOKIE['student'])==1){
                        require("student.php");
                    }
                    elseif(($_COOKIE['login']) == 1 && ($_COOKIE['teacher'])==1){
                        require("teacher.php");
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>