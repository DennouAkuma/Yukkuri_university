<div class="right_main_content">
    <ul>
    <?php
    //学部情報
    $u_name_list = array();
    $d_name_list = array();
    $sql_select = 'select * from base_info where 5 != authority_int';

    //学科情報
    $sql_select = 'select * from ud_list';

    $result_sql = mysqli_query($db_link,$sql_select);

    if(!$result_sql){
        die('失敗'.mysqli_error());
    }else{
        while ($row = mysqli_fetch_assoc($result_sql)) {
            array_push($d_name_list,$row['d_name']);
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
        }        
    }

    switch ($side_number){
        case 0: //大学案内
            $chas_str = '<li><a href="./overview_page.php#so_A">学長の言葉</a></li>
            <li><a href="./overview_page.php#so_B">副学長の言葉</a></li>
            <li><a href="./overview_page.php#so_C">設立目的</a></li>
            <li><a href="./overview_page.php#so_D">大学の沿革</a></li>
            <li><a href="./overview_page.php#so_E">広報</a></li>
            <li><a href="./overview_page.php#so_F">情報の扱い</a></li>';
            echo $chas_str;
            break;
        case $side_number < 99:

            $u_number = str_pad($side_number, 3, 0, STR_PAD_LEFT);
            //学部情報
            $sql_select = 'select * from ud_list where u_id = "U'.$u_number.'"';
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

            for($i = 0;$i < count($u_name_list);$i++){
                if($i == 0){
                    echo '<li><a href="#">'.$u_name_list[$i].'</a></li>';
                }
                echo '<li><a href="#">'.$d_name_list[$i].'</a></li>';
            }

            break;

        case 404:
            break;
    }


    ?>
    </ul>
</div>
