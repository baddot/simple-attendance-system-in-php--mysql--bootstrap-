<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en" xmlns="http://www.w3.org/1999/html">
=======
<html lang="en">
>>>>>>> a0d5860fa5408103ce79b8b6fa9ab23730e6f54f
<head>
    <meta charset="UTF-8">
    <title>Attendance System</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<<<<<<< HEAD
<?php include ("nav.php"); ?>
=======
>>>>>>> a0d5860fa5408103ce79b8b6fa9ab23730e6f54f
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="center-form">
<<<<<<< HEAD
                <div class="panel panel-primary" style="border: none">
                    <div class="panel-heading"><h1>Login</h1></div>
                    <form method="post" action="<?php echo($_SERVER['PHP_SELF'])?>" style="margin-top: 50px;">
                        <div class="form-group">
                            <label for="email"> Email </label>
                            <input type="email" name="email" class="form-control" placeholder="username@gmail.com">
                        </div>

                        <input type="submit" name="login" class="btn btn-primary" value="Login">
                    </form>
                </div>
=======
                <form method="post" action="<?php echo($_SERVER['PHP_SELF'])?>">
                    <div class="form-group">
                        <label for="email"> Email </label>
                        <input type="email" name="email" class="form-control" placeholder="username@gmail.com">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="login" class="form-control btn btn-primary" value="Login">
                    </div>
                </form>
>>>>>>> a0d5860fa5408103ce79b8b6fa9ab23730e6f54f
            </div>
        </div>
    </div>
</div>

</body>
</html>
<?php require("db-connect.php");
?>
<?php
    $isLogin = 0;
<<<<<<< HEAD
    $teacher = 0;
    $student = 0;
    $loginId = 0;
=======
    $teacher =0;
    $student =0;
>>>>>>> a0d5860fa5408103ce79b8b6fa9ab23730e6f54f
    if(isset($_POST['login']) && isset($_POST['email']) && !empty($_POST['email'])){

        $email = $_POST['email'];
        $query = "SELECT * FROM user WHERE email='".$email."'";


        $result = $conn->query($query);

        if ($result && $result->num_rows > 0){
            $isLogin = 1;
            // output data of each row
            while($row = $result->fetch_assoc()) {

                if($row['role']=='teacher'){
                    $teacher=1;
                    $student=0;
                    header('Location: index.php');
                }
                else{
                    $student=1;
                    $teacher=0;
                    header('Location: index.php');
                }
                setcookie('currentUser', $row['email']);
<<<<<<< HEAD
                setcookie('loginId', $row['id']);
=======
>>>>>>> a0d5860fa5408103ce79b8b6fa9ab23730e6f54f
            }
        }
        else {
            echo "User does no exist";
        }
        $conn->close();
        setcookie('login', $isLogin);
        setcookie('teacher', $teacher);
        setcookie('student', $student);
    }
?>