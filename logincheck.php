<?php 
    if(!$_SESSION['logged_in'] || isset($_POST['LogOut'])) {
        $_SESSION['logged_in']=FALSE;
        session_unset();
        session_destroy();
        if(isset($_COOKIE[session_name()])){
            setcookie(session_name(), '', time()-360000, '/');
        }
        session_regenerate_id(TRUE);
        header('Location: sign_in.php');
        exit();
    }
?>