<?php
    require_once ('../classes/DBConnection.php');
    require_once ('../classes/User.php');
    $db = new DBConnection('mySettings.ini');
    $res = $db->doQuery('SELECT * FROM users WHERE username="' . $_POST["username"] . '"');
    if(empty($res)) {
        echo("No users with that username.");
    } else {
        foreach($res as $arrUser) { // Wont need this is a system with unique usernames
            if($arrUser["password"] == $_POST["password"]) {
                session_start();
                $_SESSION['User'] = new User(
                    $arrUser['id'],
                    $arrUser['username'],
                    $arrUser['password'],
                    $arrUser['name']
                );
                header("Location: /CoreTrekTest/html/loggedin.php");
                exit(0);   
            }
        }
    }
?>
