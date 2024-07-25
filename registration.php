<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration From</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
       <?php
       if(isset($_POST["submit"])){
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordRepeat = $_POST["repeat_password"];

        $erros = array();

        if(empty($fullname) || empty($email) || empty($password) || empty($passwordRepeat) ){
            array_push($erros, "all field are error");
        }
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($erros, "Email not vaild");
        }
        if(strlen($password)<8){
            array_push($erros, "password length should be 8char");

        }
        if($password !== $passwordRepeat){

            array_push($erros, "password worng");
         
        }
       }
       
       ?>   
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="repeat_password" placeholder="Repeat password">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary"value="Register" name="submit">
            </div>
        </form>
    </div>
    
</body>
</html>