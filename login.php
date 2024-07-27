<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login </title>
</head>
<body>
    <div class="container">
        <?php 
        if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password =$_POST["password"];
             require_once "database.php";
             $sql = "SELECT * FROM user WHERE email='$email' ";
             $result = mysqli_query($conn, $sql);
             $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
             if ($user) {
                if (password_verify($password, $user["password"])) {
                    header("Location : index.php");
                    die();
                }
                
             }else{
                echo "<div class='alert alert-danger'>email does not match</div>";
             }

        }
        
        
        ?>



        <form action ="login.php" method="post">
            <div class="form-group">
                <input type="email" placeholder="enter a email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <input type="passsword" placeholder="enter a password" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="login" name="login" class="btn btn-primary">
            </div>
    </div>
    
</body>
</html>