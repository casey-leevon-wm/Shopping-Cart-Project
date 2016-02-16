<?php
    require('Connecter.php');
   // if($_SESSION["userName"] & $_SESSION["password"] != null){
   //     $TUNV = $_SESSION["userName"];
   //     $TPWV = $_SESSION["password"];
   //     $stmt = $dbh->prepare("SELECT * FROM Signin WHERE username='$TUNV' and password='$TPWV'");
   //     $Oldresult = $stmt->execute($prepData);
   //     if($Oldresult){
   //         header("Location: HomePage.html");
   //         exit;
   //     }
   // }

    $username = $_POST['userName'];
    $password = $_POST['pass'];


    //if(isset($username)) {
    if(  isset($_POST['pass']) ) {
        $prepData = array(
            "password" => $password,
            "username" => $username
        );
        //print_R($prepData);
        $stmt = $dbh->prepare("SELECT * FROM Signin WHERE username='$username' and password='$password'");
        $result = $stmt->execute($prepData)->fetchArray();

//print_r($result);
        if(count($result)){

            $_SESSION["password"] = $password;
            $_SESSION["userName"] = $username;
            $_SESSION['registered'] = 1;
            echo "Registered.";
            echo $username;
            echo $password;

            header("Location: HomePage.html");
        }else {
            var_dump($result);
            echo "Error finding account.";
           header("Location: Index.php");
        }
    }

?>


<html>
    <title>
        The section?
    </title>
    <head>
        <link href="StyleSheet.css">
        <script src="Script.js" type="javascript"></script>
    </head>
    <body>
        <div id="section1">
            <form method="post" id="sectionstartingsection">
                <h1>Login</h1>
                Username:
                <input type="text" name="userName" id="userName">
                Password:
                <input type="password" name="pass" id="pass">
                <button type="submit" name="submit" id="submitbutton" value="1">  Enter   </button>
            </form>
            <a href="Signup.php">Don't have an account?</a>
        </div>
    </body>
</html>
