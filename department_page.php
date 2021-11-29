<?php
    
    $d_status = "";
    $u_status = "";
    $ud_error_flag = False;

    if(isset($_GET['u_status'])){
        $u_status = $_GET['u_status'];

        switch($u_status){
            case 'U001':
                $side_number = 1;
                break;
            case 'U002':
                $side_number = 2;
                break;
            case 'U003':
                $side_number = 3;
                break;
            case 'U004':
                $side_number = 4;
                break;
            case 'U005':
                $side_number = 5;
                break;
            case 'U006':
                $side_number = 6;
                break;
            case 'U007':
                $side_number = 7;
                break;
            case 'U008':
                $side_number = 8;
                break;
            case 'U009':
                $side_number = 9;
                break;
            case 'U010':
                $side_number = 10;
                break;
    
            default:
                header("HTTP/1.1 404 Not Found");
                $ud_error_flag = True;
                $side_number = 404;
                break;
        }
    }else if(isset($_GET['d_status'])){
        $d_status = $_GET['d_status'];

        switch($d_status){
            //政治経営
            case 'D001':
            case 'D002':
            case 'D003':
                $side_number = 1;
                break;
            //文学
            case 'D004':
            case 'D005':
            case 'D006':
                $side_number = 2;
                break;
            //工学
            case 'D007':
            case 'D008':
                $side_number = 3;
                break;
            //理学
            case 'D009':
            case 'D010':
                $side_number = 4;
                break;
            //芸術
            case 'D011':
            case 'D012':
                $side_number = 5;
                break;
            //外国語
            case 'D013':
                $side_number = 6;
                break;
            //家政
            case 'D014':
                $side_number = 7;
                break;
            //国際
            case 'D015':
                $side_number = 8;
                break;
            //医学
            case 'D016':
                $side_number = 9;
                break;
            //獣医
            case 'D017':
                $side_number = 10;
                break;
                
            default:
                header("HTTP/1.1 404 Not Found");
                $ud_error_flag = True;
                $side_number = 404;
                break;
        }
    }else{
        header("HTTP/1.1 404 Not Found");
        $ud_error_flag = True;
        $side_number = 404;
    }
?>

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
            <?php 
                if($ud_error_flag == True){
                    http_response_code(404);
                    echo '<h1>404 Not Found</h1>';
                    echo '<h2>ページが見つかりませんでした。</h2>';
                }else{
                    echo '<div class="left_main_content">';

                    $u_name_list = array();
                    $d_name_list = array();
                    
                    $u_id_list = array();
                    $d_id_list = array();

                    $img_list = array();
                    $dsc_img_list = array();

                    $u_dsc_list = array();
                    $d_dsc_list = array();

                    $u_rec_list = array();

                    if(isset($_GET['u_status'])){
                        //学部情報
                        $sql_select = 'select * from ud_list where u_id = "'.$u_status.'"';

                        $result_sql = mysqli_query($db_link,$sql_select);
                    
                        if(!$result_sql){
                            die('失敗'.mysqli_error());
                        }else{
                            while ($row = mysqli_fetch_assoc($result_sql)) {
                                array_push($u_name_list,$row['u_name']);
                                array_push($d_name_list,$row['d_name']);

                                array_push($u_id_list,$row['u_id']);
                                array_push($d_id_list,$row['d_id']);
                                
                                array_push($img_list,$row['img_url']);
                                array_push($dsc_img_list,$row['des_img_url']);

                                array_push($u_dsc_list,$row['u_dsc']);
                                array_push($d_dsc_list,$row['d_dsc']);

                                array_push($u_rec_list,$row['u_rec']);
                            }        
                        }
                        
                    }else if(isset($_GET['d_status'])){
                        //学科情報
                        $sql_select = 'select * from ud_list where d_id = "'.$d_status.'"';
                        $u_id_str = "";

                        $result_sql = mysqli_query($db_link,$sql_select);
                    
                        if(!$result_sql){
                            die('失敗'.mysqli_error());
                        }else{
                            while ($row = mysqli_fetch_assoc($result_sql)) {
                                $u_id_str = $row['u_id'];
                            }        
                        }

                        $sql_select = 'select * from ud_list where u_id = "'.$u_id_str.'"';

                        $result_sql = mysqli_query($db_link,$sql_select);
                    
                        if(!$result_sql){
                            die('失敗'.mysqli_error());
                        }else{
                            while ($row = mysqli_fetch_assoc($result_sql)) {
                                array_push($u_name_list,$row['u_name']);
                                array_push($d_name_list,$row['d_name']);
                                
                                array_push($u_id_list,$row['u_id']);
                                array_push($d_id_list,$row['d_id']);
                                
                                array_push($img_list,$row['img_url']);
                                array_push($dsc_img_list,$row['des_img_url']);

                                array_push($u_dsc_list,$row['u_dsc']);
                                array_push($d_dsc_list,$row['d_dsc']);

                                array_push($u_rec_list,$row['u_rec']);
                            }        
                        }
                    }

                    //表示部分
                    echo '<p><a href="./index.php">Top</a> > <a href="./undergraduate_page.php">学部情報</a> > <a href="./department_page.php?d_status='.$d_id_list[0].'">'.$u_name_list[0].'</a></p>';
                    echo '<img class="u_top_img" src="./media/img/department/'.$img_list[0].'">';
                    echo '<div class="ud_tabs">
                            <input id="all" type="radio" name="ud_tab_item" checked>
                            <label class="ud_tab_item" for="all">重要なお知らせ</label>
                            <div class="ud_tab_content" id="all_content">
                        
                                <div class="ud_tab_sub_content">
                                    <label>2000年1月1日</label><a href="#"><p>hogehoge</p></a>
                                    <hr class="float_clearA">
                                </div>
                                <div class="ud_tab_sub_content">
                                    <label>2000年1月1日</label><a href="#"><p>hogehoge</p></a>
                                    <hr class="float_clearA">
                                </div>
                                <div class="ud_tab_sub_content">
                                    <label>2000年1月1日</label><a href="#"><p>hogehoge</p></a>
                                    <hr class="float_clearA">
                                </div>
                                <div class="ud_tab_sub_content">
                                    <label>2000年1月1日</label><a href="#"><p>hogehoge</p></a>
                                    <hr class="float_clearA">
                                </div>
                                <div class="ud_tab_sub_content">
                                    <label>2000年1月1日</label><a href="#"><p>hogehoge</p></a>
                                    <hr class="float_clearA">
                                </div>
                            </div>
                        </div>';

                    echo '<h2 class="sub_title_h2_B">'.$u_name_list[0].'とは</h2>';
                    echo $u_dsc_list[0];

                    echo '<div class="up_rco_div">';
                    echo $u_rec_list[0];
                    echo '</div>';
                    echo '<h2 class="sub_title_h2_B">学部の構成</h2>';
                    echo '<img class="d_des_img" src="./media/img/department/'.$dsc_img_list[0].'">';
                    
                    for($i = 0;$i < count($d_name_list);$i++){
                        echo '<h2 class="sub_title_h2_B">'.$d_name_list[$i].'</h2>';
                        echo '<h3 class="sub_title_h3_A">学科説明</h3>';
                        echo $d_dsc_list[$i];
                        echo '<h3 class="sub_title_h3_A">所属している教授</h3>';
                        echo '<div>';

                        $sql_select = 'select * from base_info where dep_id_A = "'.$d_id_list[$i].'"';

                        $m_id_list = array();
                        $name_str_list = array();

                        $result_sql = mysqli_query($db_link,$sql_select);

                        if(!$result_sql){
                            die('失敗'.mysqli_error());
                        }else{
                            while ($row = mysqli_fetch_assoc($result_sql)) {
                                array_push($m_id_list,$row['m_id']);
                                array_push($name_str_list,$row['name_str']);
                            }        
                        }

                        for($c = 0;$c < count($m_id_list);$c++){
                            $chas_add_str = '<div class="du_channel_list">'."\n";
                            echo $chas_add_str;
                            $chas_add_str = '<img src="./media/img/user_img/'.$m_id_list[$c].'/user_icon.png">'."\n";
                            echo $chas_add_str;
                            $chas_add_str = '<p>'.$name_str_list[$c].'</p>'."\n";
                            echo $chas_add_str;
                            $chas_add_str = '</div>'."\n";
                            echo $chas_add_str;
                        }

                        echo '<hr class="float_clearA">';
                        echo '</div>';
                    }

                    echo '</div>';
                }
            ?>
            <?php
                include './temp/side.php';
            ?>
            </div>
            <hr class="float_clearA">
    </main>
    <footer>
        <?php
            include './temp/footer.php' ;
        ?>
    </footer>
</body>
</html>