<!doctype html>
<html>
<head>
<?php
    $title_str = "職員管理者ページ";
    include "./temp/head.php";
?>
</head>
<body>
    <header>
    </header>
    <main>
        <div id="login_div">
            <h1>職員管理者ページ</h1>
            <form action="./admin_main.php" method="post">
                <lebel>ID</lebtl></br>
                <input class="in_text_A" name="y_id" type="text"></br>
                <lebel>パスワード</lebtl></br>
                <input class="in_text_A" name="y_pw" type="password"></br>
                <?php
                    $result_int = 0;
                    if(isset($_GET['result'])){
                        $result_int = (int)$_GET['result'];
                        if($result_int == 1001){
                            echo '<p class="error_p">IDまたはパスワードが間違っています</p>';
                        }
                    }
                ?>
                <div class="login_bt_div">
                    <input class="in_button bt_type_A" type="reset" value="リセット">
                    <input class="in_button bt_type_B" type="submit" value="ログイン">
                    <hr class="float_clearA">
                </div>
            </form>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>
