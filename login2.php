<?php 
    if(empty($_POST['username'])) empty($_POST['password'])){
        header('Location:login.php');
    }
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);

    require "../includes/connect.php";

    $sql = "SELECT password,status FROM users WHERE username=?";
    $res = $dbh->prepare($sql);
    $res->bind_param("s",$username);
    $res->execute();
    $res = $res->get_result();
    $row = $res->fetch_assoc();

    if(!row){
        //användaren finns inte
        echo "felaktig användare";
    }
    else{
        //användaren finns
        if($row['password']===$password){
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['status'] = $row['status'];
            echo "Inloggad";

        }
        else{
            //felaktigt lösenord
            echo "Felaktigt lösenord";
        }
    }
    ?>