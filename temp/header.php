<?php 
    include "./admin/temp/root.php";

    $db_link = new mysqli($mysql_host_A, $mysql_user_A, $mysql_pass_A,$mysql_db_A);
    if (!$db_link) {
        die('接続失敗'.mysqli_error());
    }

    //学科情報
    $sql_select = 'select * from ud_list';
    $u_name_list = array();
    $d_name_list = array();
    $u_id_list = array();
    $d_id_list = array();
    
    $m_id_list = array();
    $name_str_list = array();

    $result_sql = mysqli_query($db_link,$sql_select);

    if(!$result_sql){
        die('失敗'.mysqli_error());
    }else{
        while ($row = mysqli_fetch_assoc($result_sql)) {
            array_push($d_name_list,$row['d_name']);
            array_push($u_id_list,$row['d_id']);
        }        
    }

    //学部情報
    $sql_select = 'select * from ud_list group by u_id';

    $result_sql = mysqli_query($db_link,$sql_select);

    if(!$result_sql){
        die('失敗'.mysqli_error());
    }else{
        while ($row = mysqli_fetch_assoc($result_sql)) {
            array_push($u_name_list,$row['u_name']);
            array_push($d_id_list,$row['u_id']);
        }        
    }

    //チャンネル情報
    $sql_select = 'select * from base_info where 5 != authority_int';

    $result_sql = mysqli_query($db_link,$sql_select);

    if(!$result_sql){
        die('失敗'.mysqli_error());
    }else{
        while ($row = mysqli_fetch_assoc($result_sql)) {
            array_push($m_id_list,$row['m_id']);
            array_push($name_str_list,$row['name_str']);
        }        
    }
?>

<div id="top_header">
    <div>
        <a>お問い合わせ</a>
        <hr class="float_clearA">
    </div>
</div>
<div id="logo_top">
    <a id="logo_img" href="./index.php"><img id="title_logo" src="./media/img/logo3.svg"></a>
    <a id="logo_a" href="./admin/admin_login.php" class="icon_d">職員専用ページ</a>
    <hr class="float_clearA">
</div>


<nav class="gnav-wrapper">
    <ul class="gnav main-wrapper">
        <li>
            <a href="./overview_page.php">大学案内</a>
            <div class="megamenu menu_div_left1">
                <ul class="megamenu-inner main-wrapper">
                    <li>
                        <h3>大学概要</h3>
                        <ul>
                            <li><a href="./overview_page.php#so_A" class="cm_link">学長の言葉</a></li>
                            <li><a href="./overview_page.php#so_B" class="cm_link">副学長の言葉</a></li>
                            <li><a href="./overview_page.php#so_C" class="cm_link">設立目的</a></li>
                            <li><a href="./overview_page.php#so_D" class="cm_link">大学の沿革</a></li>
                            <li><a href="./overview_page.php#so_E" class="cm_link">広報</a></li>
                            <li><a href="./overview_page.php#so_F" class="cm_link">情報の扱い</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li>hogehoge</li>
                            <li>hogehoge</li>
                            <li>hogehoge</li>
                            <li>hogehoge</li>
                        </ul>
                    </li>
                </ul><!-- .megamenu-inner -->
            </div><!-- .megamenu -->
            </li>
        <li>
            <a href="./undergraduate_page.php">学部学科</a>
            <div class="megamenu menu_div_left2">
                <ul class="megamenu-inner main-wrapper">

                    <?php
                        //学部情報
                        $sql_select = 'select * from ud_list order by view_number';
                        $u_name_list = array();
                        $d_name_list = array();
                        $u_id_list = array();
                        $d_id_list = array();

                        $bt_number = [2,7];

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
                        $front_str = '';
                        $shift_count = 0;
                        $h3_count = 0;

                        for($i = 0;$i < count($d_id_list);$i++){
                            if($fast_flag == false){
                                $front_str = $u_id_list[$i];
                                $fast_flag = true;
                                
                                echo '<li>';
                                echo '<h3>'.$u_name_list[$i].'</h3>';
                                echo '<ul>';
                                $front_str = $u_id_list[$i];
                                echo '<li><a href="department_page.php?d_status='.$d_id_list[$i].'" class="cm_link">'.$d_name_list[$i].'</a></li>';
                            }else{
                                //同じ文字
                                if(strcmp($front_str,$u_id_list[$i]) != 0){
                                    echo '</ul>';

                                    if($bt_number[$shift_count] == $h3_count){
                                        echo '</li>';
                                        echo '<li>';
                                        if(count($bt_number) != ($shift_count+1)){
                                            $shift_count++;
                                        }
                                    }
                                    echo '<h3>'.$u_name_list[$i].'</h3>';
                                    echo '<ul>';

                                    $h3_count++;
                                }
                                $front_str = $u_id_list[$i];
                                echo '<li><a href="department_page.php?d_status='.$d_id_list[$i].'" class="cm_link">'.$d_name_list[$i].'</a></li>';
                            }
                        }

                        echo '</ul>';
                        echo '</li>';
                    ?>

                </ul><!-- .megamenu-inner -->
            </div>
        </li>
        <li>
            <a href="">教授一覧</a>
            <div class="megamenu menu_div_left3 p_grid">
                <?php
                
                    for($i = 0;$i < count($m_id_list);$i++){
                        $chas_add_str = '<div class="channel_list">'."\n";
                        echo $chas_add_str;
                        $chas_add_str = '<img src="./media/img/user_img/'.$m_id_list[$i].'/user_icon.png">'."\n";
                        echo $chas_add_str;
                        $chas_add_str = '<p>'.$name_str_list[$i].'</p>'."\n";
                        echo $chas_add_str;
                        $chas_add_str = '</div>'."\n";
                        echo $chas_add_str;
                    }
                    
                ?>
            </div>
        </li>
        <li>
            <a href="">記事・動画一覧</a>
            <div class="megamenu menu_div_left4">
            </div>
        </li>
        <li>
            <a href=""></a>
            <div class="megamenu menu_div_left5">
            </div>
        </li>
        <li>
            <a href="">記事一覧</a>
            <div class="megamenu menu_div_left6">
            </div>
        </li>
        <li>
            <a href="">メニュー7</a>
            <div class="megamenu menu_div_left7">
            </div>
        </li>
        <li>
            <a href="">メニュー8</a>
            <div class="megamenu menu_div_left8">
            </div>
        </li>
    </ul>
</nav><!-- .gnav-wrapper -->

<hr class="float_clearA">