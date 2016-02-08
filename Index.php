<?php
require('Connecter.php');

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
            <form id="sectionstartingsection">
                <h1>Login</h1>
                Username:
                <input type="text" name="userName" id="userName">
                Password:
                <input type="password" name="pass" id="pass">
                Entrance Code:
                <input type="password" name="Code" id="code">
                <button type="button" name="submit" id="submitbutton">  Enter   </button>
            </form>
            <a href="Signup.php">Don't have an account?</a>
        </div>

        <a href="HomePage.html">Random</a>
    </body>
</html>
