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
        case 1:
            echo '<li><a href="">'.$u_name_list[0].'</a></li>';
            echo '<li><a href="">'.$d_name_list[0].'</a></li>';
            echo '<li><a href="">'.$d_name_list[1].'</a></li>';
            echo '<li><a href="">'.$d_name_list[2].'</a></li>';
            break;
        case 2:
            echo '<li><a href="">'.$u_name_list[1].'</a></li>';
            echo '<li><a href="">'.$d_name_list[3].'</a></li>';
            echo '<li><a href="">'.$d_name_list[4].'</a></li>';
            echo '<li><a href="">'.$d_name_list[5].'</a></li>';
            break;
        case 3:
            echo '<li><a href="">'.$u_name_list[2].'</a></li>';
            echo '<li><a href="">'.$d_name_list[6].'</a></li>';
            echo '<li><a href="">'.$d_name_list[7].'</a></li>';
            break;
        case 4:
            echo '<li><a href="">'.$u_name_list[3].'</a></li>';
            echo '<li><a href="">'.$d_name_list[8].'</a></li>';
            echo '<li><a href="">'.$d_name_list[9].'</a></li>';
            break;
        case 5:
            echo '<li><a href="">'.$u_name_list[4].'</a></li>';
            echo '<li><a href="">'.$d_name_list[10].'</a></li>';
            echo '<li><a href="">'.$d_name_list[11].'</a></li>';
            break;
        case 6:
            echo '<li><a href="">'.$u_name_list[5].'</a></li>';
            echo '<li><a href="">'.$d_name_list[12].'</a></li>';
            break;
        case 7:
            echo '<li><a href="">'.$u_name_list[6].'</a></li>';
            echo '<li><a href="">'.$d_name_list[13].'</a></li>';
            break;
        case 8:
            echo '<li><a href="">'.$u_name_list[7].'</a></li>';
            echo '<li><a href="">'.$d_name_list[14].'</a></li>';
            break;
        case 9:
            echo '<li><a href="">'.$u_name_list[8].'</a></li>';
            echo '<li><a href="">'.$d_name_list[15].'</a></li>';
            break;
        case 10:
            echo '<li><a href="">'.$u_name_list[9].'</a></li>';
            echo '<li><a href="">'.$d_name_list[16].'</a></li>';
            break;

        case 404:
            break;
    }
    ?>

    </ul>
</div>