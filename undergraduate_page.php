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

        $u_name_list = array();
        $d_name_list = array();
        
        $u_id_list = array();
        $d_id_list = array();
    
        //学科情報
        $sql_select = 'select * from ud_list';
    
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
    ?>
    </header>
    <main>
        <div class="margin_div bc_imgB">
            <div>
                <h1>学部学科</h1>
            </div>
        </div>
        
        <div class="main_content_up">
            <p><a href="./index.php">Top</a> > <a href="./undergraduate_page.php">学部情報</a></p>
            <h1 class="sub_title_h2_A"><?php echo $u_name_list[0]?></h1>
            <div class="sub_content_up">
                <div class="sc_up_left_A">
                    <a href=<?php echo 'department_page.php?u_status='.$d_id_list[0];?>><img src="./media/img/department/department_A.svg"></a>
                </div>
                <div class="sc_up_right_A">
                    <a class="link_type_A up_bc_color_A" href=<?php echo 'department_page.php?d_status='.$u_id_list[0];?>><p><?php echo $d_name_list[0]?></p></a>
                    <a class="link_type_A up_bc_color_A" href=<?php echo 'department_page.php?d_status='.$u_id_list[1];?>><p><?php echo $d_name_list[1]?></p></a>
                    <a class="link_type_A up_bc_color_A" href=<?php echo 'department_page.php?d_status='.$u_id_list[2];?>><p><?php echo $d_name_list[2]?></p></a>
                </div>
                <hr class="float_clearA">
            </div>

            <h1 class="sub_title_h2_A"><?php echo $u_name_list[1]?></h1>
            <div class="sub_content_up">
                <div class="sc_up_left_B">
                    <a class="link_type_A up_bc_color_B" href=<?php echo 'department_page.php?d_status='.$u_id_list[3];?>><p><?php echo $d_name_list[3]?></p></a>
                    <a class="link_type_A up_bc_color_B" href=<?php echo 'department_page.php?d_status='.$u_id_list[4];?>><p><?php echo $d_name_list[4]?></p></a>
                    <a class="link_type_A up_bc_color_B" href=<?php echo 'department_page.php?d_status='.$u_id_list[5];?>><p><?php echo $d_name_list[5]?></p></a>
                </div>
                <div class="sc_up_right_B">
                    <a href=<?php echo 'department_page.php?u_status='.$d_id_list[1];?>><img src="./media/img/department/department_B.svg"></a>
                </div>
                <hr class="float_clearA">
            </div>

            <h1 class="sub_title_h2_A"><?php echo $u_name_list[2]?></h1>
            <div class="sub_content_up">
                <div class="sc_up_left_A">
                    <a href=<?php echo 'department_page.php?u_status='.$d_id_list[2];?>><img src="./media/img/department/department_C.svg"></a>
                </div>
                <div class="sc_up_right_A">
                    <a class="link_type_A up_bc_color_C" href=<?php echo 'department_page.php?d_status='.$u_id_list[6];?>><p><?php echo $d_name_list[6]?></p></a>
                    <a class="link_type_A up_bc_color_C" href=<?php echo 'department_page.php?d_status='.$u_id_list[7];?>><p><?php echo $d_name_list[7]?></p></a>
                </div>
                <hr class="float_clearA">
            </div>

            <h1 class="sub_title_h2_A"><?php echo $u_name_list[3]?></h1>
            <div class="sub_content_up">
                <div class="sc_up_left_B">
                    <a class="link_type_A up_bc_color_D" href=<?php echo 'department_page.php?d_status='.$u_id_list[8];?>><p><?php echo $d_name_list[8]?></p></a>
                    <a class="link_type_A up_bc_color_D" href=<?php echo 'department_page.php?d_status='.$u_id_list[9];?>><p><?php echo $d_name_list[9]?></p></a>
                </div>
                <div class="sc_up_right_B">
                    <a href=<?php echo 'department_page.php?u_status='.$d_id_list[3];?>><img src="./media/img/department/department_D.svg"></a>
                </div>
                <hr class="float_clearA">
            </div>

            <h1 class="sub_title_h2_A"><?php echo $u_name_list[4]?></h1>
            <div class="sub_content_up">
                <div class="sc_up_left_A">
                    <a href=<?php echo 'department_page.php?u_status='.$d_id_list[4];?>><img src="./media/img/department/department_E.svg"></a>
                </div>
                <div class="sc_up_right_A">
                    <a class="link_type_A up_bc_color_E" href=<?php echo 'department_page.php?d_status='.$u_id_list[10];?>><p><?php echo $d_name_list[10]?></p></a>
                    <a class="link_type_A up_bc_color_E" href=<?php echo 'department_page.php?d_status='.$u_id_list[11];?>><p><?php echo $d_name_list[11]?></p></a>
                </div>
                <hr class="float_clearA">
            </div>

            <h1 class="sub_title_h2_A"><?php echo $u_name_list[5]?></h1>
            <div class="sub_content_up">
                <div class="sc_up_left_B">
                    <a class="link_type_A up_bc_color_F" href=<?php echo 'department_page.php?d_status='.$u_id_list[12];?>><p><?php echo $d_name_list[12]?></p></a>
                </div>
                <div class="sc_up_right_B">
                    <a href=<?php echo 'department_page.php?u_status='.$d_id_list[5];?>><img src="./media/img/department/department_F.svg"></a>
                </div>
                <hr class="float_clearA">
            </div>

            <h1 class="sub_title_h2_A"><?php echo $u_name_list[6]?></h1>
            <div class="sub_content_up">
                <div class="sc_up_left_A">
                    <a href=<?php echo 'department_page.php?u_status='.$d_id_list[6];?>><img src="./media/img/department/department_G.svg"></a>
                </div>
                <div class="sc_up_right_A">
                    <a class="link_type_A up_bc_color_G" href=<?php echo 'department_page.php?d_status='.$u_id_list[13];?>><p><?php echo $d_name_list[13]?></p></a>
                </div>
                <hr class="float_clearA">
            </div>

            <h1 class="sub_title_h2_A"><?php echo $u_name_list[7]?></h1>
            <div class="sub_content_up">
                <div class="sc_up_left_B">
                    <a class="link_type_A up_bc_color_H" href=<?php echo 'department_page.php?d_status='.$u_id_list[14];?>><p><?php echo $d_name_list[14]?></p></a>
                </div>
                <div class="sc_up_right_B">
                    <a href=<?php echo 'department_page.php?u_status='.$d_id_list[7];?>><img src="./media/img/department/department_H.svg"></a>
                </div>
                <hr class="float_clearA">
            </div>

            <h1 class="sub_title_h2_A"><?php echo $u_name_list[8]?></h1>
            <div class="sub_content_up">
                <div class="sc_up_left_A">
                    <a href=<?php echo 'department_page.php?u_status='.$d_id_list[8];?>><img src="./media/img/department/department_I.svg"></a>
                </div>
                <div class="sc_up_right_A">
                    <a class="link_type_A up_bc_color_I" href=<?php echo 'department_page.php?d_status='.$u_id_list[15];?>><p><?php echo $d_name_list[15]?></p></a>
                </div>
                <hr class="float_clearA">
            </div>

            <h1 class="sub_title_h2_A"><?php echo $u_name_list[9]?></h1>
            <div class="sub_content_up">
                <div class="sc_up_left_B">
                    <a class="link_type_A up_bc_color_J" href=<?php echo 'department_page.php?d_status='.$u_id_list[16];?>><p><?php echo $d_name_list[16]?></p></a>
                </div>
                <div class="sc_up_right_B">
                    <a href=<?php echo 'department_page.php?u_status='.$d_id_list[9];?>><img src="./media/img/department/department_J.svg"></a>
                </div>
                <hr class="float_clearA">
            </div>
        </div>
    </main>
    <footer>
        <?php
            include './temp/footer.php' ;
        ?>
    </footer>
</body>
</html>