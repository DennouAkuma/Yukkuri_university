<!doctype html>
<html>
<head>
<?php
    $title_str = "ゆっくり大学・概要";
    include './temp/head.php';
?>
</head>
<body>
    <header>
    <?php
        include './temp/header.php';
    ?>
    </header>
    <main>
        <div class="content_main">
            <div class="left_main_content">
            </div>
            <?php
                $side_number = 2;
                include './temp/side.php';
            
                //学部情報
                $sql_select = 'select * from ud_list';
                $u_name_list = array();
                $d_name_list = array();
                $u_id_list = array();
                $d_id_list = array();

                $result_sql = mysqli_query($db_link,$sql_select);

                if(!$result_sql){
                    die('失敗'.mysqli_error());
                }else{
                    while ($row = mysqli_fetch_assoc($result_sql)) {
                        array_push($u_name_list,$row['u_name']);
                        array_push($d_name_list,$row['d_name']);
                        array_push($u_id_list,$row['u_id']);
                        array_push($d_id_list,$row['d_id']);
                    }        
                }

                $fast_flag = false;
                $scand_flag = false;
                $front_str = '';
                for($i = 0;$i < count($d_id_list);$i++){
                    if($fast_flag == false){
                        $front_str = $u_id_list[$i];
                        $fast_flag = true;

                        echo "<p>===================</p>";
                        echo $u_name_list[$i].'</br>';
                        $scand_flag = true;

                        $front_str = $u_id_list[$i];
                        echo $d_name_list[$i].'</br>';
                    }else{
                        //同じ文字
                        if(strcmp($front_str,$u_id_list[$i]) != 0){
                            echo "<p>===================</p>";
                            echo $u_name_list[$i].'</br>';
                            $scand_flag = true;
                        }
                        $front_str = $u_id_list[$i];
                        echo $d_name_list[$i].'</br>';
                    }
                }
            ?>
    </main>
    <footer>
        <?php
            include './temp/footer.php' ;
        ?>
    </footer>
</body>
</html>