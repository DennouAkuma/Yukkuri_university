<?php
    $error_flag = false;
    $user_id = "";
    $user_pw = "";

    if(isset($_COOKIE['user_id'])){
        $user_id = $_COOKIE['user_id'];
        setcookie('user_id',$user_id,time()+60*60*24*7);
    }else if(isset($_POST['y_id'])){
        $user_id = $_POST['y_id'];
        setcookie('user_id',$user_id,time()+60*60*24*7);
    }else{
        $error_flag = true;
    }

    if(isset($_COOKIE['user_pw'])){
        $user_pw = $_COOKIE['user_pw'];
        setcookie('user_id',$user_pw,time()+60*60*24*7);
    }else if(isset($_POST['y_pw'])){
        $user_pw = $_POST['y_pw'];
        setcookie('user_id',$user_pw,time()+60*60*24*7);
    }else{
        $error_flag = true;
    }

    include "./temp/root.php";

    $db_link = new mysqli($mysql_host_A, $mysql_user_A, $mysql_pass_A,$mysql_db_A);
    if (!$db_link) {
        die('接続失敗'.mysqli_error());
    }

    $sql_select = 'select * from ';

    $result_insert = mysqli_query($db_link,$sql_select);
    if(!$result_insert){
        die('select失敗'.mysqli_error());
    }

    mysqli_close($db_link);
?>