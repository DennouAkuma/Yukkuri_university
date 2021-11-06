<?php
    include "./temp/login_status.php";
?>
<!doctype html>
<html>
<head>
<?php
    $sql_select = 'select * from id_list where "'.$user_id.'" = login_id';
    $user_m_id = "";
    $user_name = "";

    $result_sql = mysqli_query($db_link,$sql_select);

    if(!$result_sql){
        die('失敗'.mysqli_error());
    }else{
        while ($row = mysqli_fetch_assoc($result_sql)) {
            $user_m_id = $row['m_id'];
        }        
    }

    $sql_select = 'select * from base_info where "'.$user_m_id.'" = m_id';
    $user_m_id = "";

    $result_sql = mysqli_query($db_link,$sql_select);

    if(!$result_sql){
        die('失敗'.mysqli_error());
    }else{
        while ($row = mysqli_fetch_assoc($result_sql)) {
            $user_name = $row['name_str'];
        }        
    }

    $title_str = "ようこそ！".$user_name."さん";
    include "./temp/head.php";
?>
</head>
<body>
    <div class="left_main_content">
        <div class="tabs">
            <input id="all" type="radio" name="tab_item" checked>
            <label class="tab_item" for="all">コード</label>
            <input id="programming" type="radio" name="tab_item">
            <label class="tab_item" for="programming">デザイン</label>
            <div class="tab_content" id="all_content">
                <div class="left_sub_content">
                    <ul class="add_content_list">
                        <li><img title="見出しテンプレートを追加" src="./media/img/icon_heading.svg"></li>
                        <li><img title="本文テンプレートを追加" src="./media/img/icon_text.svg"></li>
                        <li><img title="画像を追加" src="./media/img/icon_img.svg"></li>
                    </ul>
                </div>
                <div class="right_sub_content tab_content_description">
                    <textarea id="code_editer" class="lined text_program" spellcheck="false"></textarea>
                </div>
                <hr class="float_clearA">
            </div>
            <div class="tab_content" id="programming_content">
                <div id="code_design" class="tab_content_description"></div>
            </div>
        </div>
    </div>
    <footer>
    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
    <script type="text/javascript" src="./js/jquery-linedtextarea.js" ></script>
    <script type="text/javascript" src="./js/textarea.js" ></script>
</body>
</html>