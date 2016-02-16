


<?php

    require('Connecter.php');
    if($_SESSION["userName"] & $_SESSION["password"] != null){
        $TUNV = $_SESSION["userName"];
        $TPWV = $_SESSION["password"];
        $stmt = $dbh->prepare("SELECT * FROM Signin WHERE username='$TUNV' and password='$TPWV'");
        $Oldresult = $stmt->execute($prepData);
        if($Oldresult){
            header("Location: HomePage.html");
            exit;
        }
    }
    if(isset($_SESSION['userName'])!="") {
        header("Location: index.php");
    }

    if(isset($_POST['signup'])){

        //print_R($_POST);

        $username = $_POST['username'];
        $password = $_POST['pass'];
        $email = $_POST['email'];
        $first = $_POST['first'];
        $last = $_POST['last'];


        if(isset($username)){
            //$mysql_get_users = mysql_query("SELECT * FROM users where username='$username'");

            $prepData = array(
                "firstN"=>$first,
                "lastN"=>$last,
                "password"=>$password,
                "email"=>$email,
                "username"=>$username
            );

            print_R($prepData);
            $stmt = $dbh->prepare("INSERT INTO Signin(firstname,
                    lastname,
                    password,
                    email,
                    username)
            VALUES(
                  :firstN,
                  :lastN,
                  :password,
                  :email,
                  :username)");
            $result = $stmt->execute($prepData);

            if($result){

                $_SESSION["password"] = $password;
                $_SESSION["userName"] = $username;
                $_SESSION['registered'] = 1;
                echo "Registered.";
                header("Location: HomePage.html");
            }else {
                var_dump($result);
                echo "Error creating account.";
               header("Location: Index.php");
            }
        }
    }
?>



<html lang="en">
    <head>
        <title>Ninja sign up</title>
        <link href="StyleSheet.css" type="text/css" rel="stylesheet">
    </head>
    <title>
        Page you shouldn't be on.
    </title>
    <body style="width: 100%; height: 100%">
    <h1 style="height: 5%; width: 100%; margin: auto; text-align: center ">Make an account</h1>
    <div id="login-form">
        <form method="post">
            First name: <input type="text" name="first" required/><br>

            Last name: <input type="text" name="last" required/><br>

            Username: <input type="text" name="username" required/><br>

            Email: <input type="text" name="email" required/><br>

            Password: <input type="password" name="pass" required/><br>

            <button type="submit" name="signup" value="1">Sign up</button></form>
        <a href="Index.php">Already have a login?</a>
    </div>
</html>