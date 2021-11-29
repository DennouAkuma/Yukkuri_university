<?php
    $error_flag = false;
    $user_id = "";
    $user_pw = "";
    $user_conf_flag = 0;

    if(isset($_POST['y_id'])){
        $user_id = $_POST['y_id'];
        setcookie('user_id',$user_id,time()+60*60*24*7);
    }else if(isset($_COOKIE['user_id'])){
        $user_id = $_COOKIE['user_id'];
        setcookie('user_id',$user_id,time()+60*60*24*7);
    }else{
        $error_flag = true;
    }

    if(isset($_POST['y_pw'])){
        $user_pw = $_POST['y_pw'];
        setcookie('user_pw',$user_pw,time()+60*60*24*7);
    }else if(isset($_COOKIE['user_pw'])){
        $user_pw = $_COOKIE['user_pw'];
        setcookie('user_pw',$user_pw,time()+60*60*24*7);
    }else{
        $error_flag = true;
    }

    include "./temp/root.php";
    include "./temp/db_send.php";


    $sql_select = 'select count(*) as number from id_list where "'.$user_id.'" = login_id and "'.$user_pw.'" = login_pass';

    $result_sql = mysqli_query($db_link,$sql_select);

    if(!$result_sql){
        die('失敗'.mysqli_error());
    }else{
        while ($row = mysqli_fetch_assoc($result_sql)) {
            $user_conf_flag = (int)$row['number'];
        }        
    }

    if($error_flag == true || $user_conf_flag == 0){
        //エラー送信
        echo "エラーです";
        
        $send_msg = 1001;
        header('Location:admin_login.php?result='.$send_msg);

        exit();
    }
?>