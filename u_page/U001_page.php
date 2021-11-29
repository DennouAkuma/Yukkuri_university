<?php
    $u_name_list = array();
    $d_name_list = array();
    
    $u_id_list = array();
    $d_id_list = array();

    if(isset($_GET['u_status'])){
        //学部情報
        $sql_select = 'select * from ud_list where u_id = "'.$u_status.'"';

        $result_sql = mysqli_query($db_link,$sql_select);
    
        if(!$result_sql){
            die('失敗'.mysqli_error());
        }else{
            while ($row = mysqli_fetch_assoc($result_sql)) {
                array_push($u_name_list,$row['u_name']);
                array_push($u_id_list,$row['u_id']);
                array_push($d_name_list,$row['d_name']);
                array_push($d_id_list,$row['d_id']);
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
                array_push($u_id_list,$row['u_id']);
                array_push($d_name_list,$row['d_name']);
                array_push($d_id_list,$row['d_id']);
            }        
        }
    }
?>
<p><a href="./index.php">Top</a> > <a href="./undergraduate_page.php">学部情報</a> > <a href="./department_page.php?d_status=D001"><?php echo $u_name_list[0];?></a></p>
<img class="u_top_img" src="./media/img/department/department_A.svg">
<div class="ud_tabs">
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
</div>

<h2 class="sub_title_h2_B"><?php echo $u_name_list[0].'とは';?></h2>
<p>
    日本で政治経済学部を最初に発足させたのは、早稲田大学である（詳細は早稲田大学政治経済学部を参照）。
    しかし、後述のように、早稲田大学の旧称である東京専門学校創立の1882年よりも前に、東京大学が1881年
    に、文学部内に政治学及理財学科を設置している（「理財」は、おおむね「経済」の意）。以降は、通説であ
    る、政治経済学部の原点は早稲田にあるとの説[要出典]に基づいての説明となる。すなわち、早稲田大学にお
    いては、同大学草創期には政治学を法学部の一部門と捉えるドイツの慣習に合わせた考え方が主流であったな
    か、イギリスの慣習を採用して、経済学とともに政治を学ぶ学部として「政治経済学部」を発足させた、と主
    張している[要出典]。これは、当時のイギリスにおいて政治の理解なくして経済学の理解はあり得ない、経済
    の理解なくして政治の理解はあり得ないという理解がなされてきたことによる。そのため、法学部が文系学部
    の中心学部であることが多い日本の大学の中で、現在においても早稲田大学においては伝統的に政治経済学部
    が文系学部の看板学部・中心学部となっている。国際的には、英国において首相を含む政治家・著名人を多く
    輩出してきたオックスフォード大学のPhilosophy, Politics and Economics (PPE)（英語版）コース[1]
    が著名であり、PPEと同様のカリキュラムを有する大学が多く存在する[2]。 オックスフォード大学のPPEは
    哲学から政治学、経済学までの広い分野をカバーしており、学生は各分野の中からいくつかの科目を選択して
    受講する。早稲田大学の政治経済学部（School of Political Science and Economics）においても同様
    のカリキュラムが採用されている。
</p>
<div class="up_rco_div">
    <ul>
        <li>政治、経済、法律についてもっと学びたい方、知りたい方</li>
        <li>政治、経済、法律の闇について知りたい方</li>
    </ul>
</div>
<h2 class="sub_title_h2_B">学部の構成</h2>
<img class="d_des_img" src="./media/img/department/department_AA.svg">
<h2 class="sub_title_h2_B"><?php echo $d_name_list[0];?></h2>
<h3 class="sub_title_h3_A">学科説明</h3>
<p>
    日本で政治経済学部を最初に発足させたのは、早稲田大学である（詳細は早稲田大学政治経済学部を参照）。
    しかし、後述のように、早稲田大学の旧称である東京専門学校創立の1882年よりも前に、東京大学が1881年
    に、文学部内に政治学及理財学科を設置している（「理財」は、おおむね「経済」の意）。以降は、通説であ
    る、政治経済学部の原点は早稲田にあるとの説[要出典]に基づいての説明となる。すなわち、早稲田大学にお
    いては、同大学草創期には政治学を法学部の一部門と捉えるドイツの慣習に合わせた考え方が主流であったな
    か、イギリスの慣習を採用して、経済学とともに政治を学ぶ学部として「政治経済学部」を発足させた、と主
    張している[要出典]。これは、当時のイギリスにおいて政治の理解なくして経済学の理解はあり得ない、経済
    の理解なくして政治の理解はあり得ないという理解がなされてきたことによる。そのため、法学部が文系学部
    の中心学部であることが多い日本の大学の中で、現在においても早稲田大学においては伝統的に政治経済学部
    が文系学部の看板学部・中心学部となっている。国際的には、英国において首相を含む政治家・著名人を多く
    輩出してきたオックスフォード大学のPhilosophy, Politics and Economics (PPE)（英語版）コース[1]
    が著名であり、PPEと同様のカリキュラムを有する大学が多く存在する[2]。 オックスフォード大学のPPEは
    哲学から政治学、経済学までの広い分野をカバーしており、学生は各分野の中からいくつかの科目を選択して
    受講する。早稲田大学の政治経済学部（School of Political Science and Economics）においても同様
    のカリキュラムが採用されている。
</p>
<h3 class="sub_title_h3_A">所属している教授</h3>
<div>
<?php
    $sql_select = 'select * from base_info where dep_id_A = "D001"';
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

    for($i = 0;$i < count($m_id_list);$i++){
        $chas_add_str = '<div class="du_channel_list">'."\n";
        echo $chas_add_str;
        $chas_add_str = '<img src="./media/img/user_img/'.$m_id_list[$i].'/user_icon.png">'."\n";
        echo $chas_add_str;
        $chas_add_str = '<p>'.$name_str_list[$i].'</p>'."\n";
        echo $chas_add_str;
        $chas_add_str = '</div>'."\n";
        echo $chas_add_str;
    }
?>
<hr class="float_clearA">
</div>

<h3 class="sub_title_h3_A">教授の動画</h3>
<div class="folding_main">
    <input id="folding_t1" class="folding_trigger" type="checkbox">
    <label class="folding_btn" for="folding_t1">続きを読む</label>
    <div class="video_div folding_item">
    <?php
        $sql_select = 'select * from video_list where ';
        $video_str_array = array();

        for($i = 0;$i < count($m_id_list);$i++){
            if($i == count($m_id_list) -1){
                //last
                $sql_select = $sql_select.'m_id = "'.$m_id_list[$i].'"';
            }else{
                //and
                $sql_select = $sql_select.'m_id = "'.$m_id_list[$i].'" or ';
            }
        }

        $sql_select = $sql_select.' order by up_load_date';

        $result_sql = mysqli_query($db_link,$sql_select);

        if(!$result_sql){
            die('失敗'.mysqli_error());
        }else{
            while ($row = mysqli_fetch_assoc($result_sql)) {
                array_push($video_str_array,$row['video_content']);
            }        
        }

        for($i = 0;$i < count($video_str_array);$i++){
            echo $video_str_array[$i];
        }
    ?>
    </div>
</div>
<hr class="float_clearA">
<h2 class="sub_title_h2_B"><?php //echo $d_name_list[1];?></h2>
<h2 class="sub_title_h2_B"><?php //echo $d_name_list[2];?></h2>