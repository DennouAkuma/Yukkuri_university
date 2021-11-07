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
    $user_type = 0;

    $result_sql = mysqli_query($db_link,$sql_select);

    if(!$result_sql){
        die('失敗'.mysqli_error());
    }else{
        while ($row = mysqli_fetch_assoc($result_sql)) {
            $user_m_id = $row['m_id'];
        }        
    }

    $sql_select = 'select * from base_info where "'.$user_m_id.'" = m_id';

    $result_sql = mysqli_query($db_link,$sql_select);

    if(!$result_sql){
        die('失敗'.mysqli_error());
    }else{
        while ($row = mysqli_fetch_assoc($result_sql)) {
            $user_name = $row['name_str'];
            $user_type = (int)$row['authority_int'];
        }        
    }

    $title_str = "ようこそ！".$user_name."さん";
    include "./temp/head.php";
?>
</head>
<body>
    <!--モーダルウィンドウコンテンツ-->
    <!--モーダルA-->
    <section id="modal_area_A" class="modalArea">
        <div id="modal_bg_A" class="modalBg"></div>
        <div class="modalWrapper">
            <h2 class="h2_type_A">見出しを追加</h2>
            <hr class="hr_type_A">
            <div class="header_text_input">
                <label>内容</label>
                <input id="heading_input" class="in_text_B" type="text" value="見出しテキスト">
            </div>
            <div class="modal_grid">
                <div></div>
                <div>
                    <div class="top_down_div">
                        <div><lebel>線の種類</lebel></div>
                        <div><select id="top_border" class="heading_border"><option value="null" checked>None</option></select></div>

                        <div><lebel>線の色</lebel></div>
                        <div><input id="top_boder_color" type="color"></div>

                        <div><lebel>線の太さ</label></div>
                        <div><select id="top_boder_size" class="size_select"></select></div>

                        <div><lebel>上の隙間</label></div>
                        <div><select id="top_padding_size" class="size_select"></select></div>
                    </div>
                </div>
                <div></div>

                <div>
                    <div class="left_right_div">
                        <div><lebel>線の種類</lebel></div>
                        <div><select id="left_border" class="heading_border"><option value="null" checked>None</option></select></div>

                        <div><lebel>線の色</lebel></div>
                        <div><input id="left_boder_color" type="color"></div>

                        <div><lebel>線の太さ</label></div>
                        <div><select id="left_boder_size" class="size_select"></select></div>

                        <div><lebel>左の隙間</label></div>
                        <div><select id="left_padding_size" class="size_select"></select></div>
                    </div>
                </div>
                <div>
                    <h2 id="heading_heading"></h2>
                </div>
                <div>
                    <div class="left_right_div">
                        <div><lebel>線の種類</lebel></div>
                        <div><select id="right_border" class="heading_border"><option value="null" checked>None</option></select></div>

                        <div><lebel>線の色</lebel></div>
                        <div><input id="right_boder_color" type="color"></div>

                        <div><lebel>線の太さ</label></div>
                        <div><select id="right_boder_size" class="size_select"></select></div>

                        <div><lebel>右の隙間</label></div>
                        <div><select id="right_padding_size" class="size_select"></select></div>
                    </div>
                </div>

                <div></div>
                    <div class="top_down_div">
                        <div><lebel>線の種類</lebel></div>
                        <div><select id="bottom_border" class="heading_border"><option value="null" checked>None</option></select></div>

                        <div><lebel>線の色</lebel></div>
                        <div><input id="bottom_boder_color" type="color"></div>

                        <div><lebel>線の太さ</label></div>
                        <div><select id="bottom_boder_size" class="size_select"></select></div>

                        <div><lebel>下の隙間</label></div>
                        <div><select id="bottom_padding_size" class="size_select"></select></div>
                    </div>
                <div></div>
            </div>
            <div class="base_info">
                <div>
                    <lebel>文字色<lebel></br>
                    <input id="font_color" type="color">
                </div>
                <div>
                    <lebel>背景色<lebel></br>
                    <input id="bg_color" type="color">
                </div>
                <div>
                    <lebel>文字サイズ<lebel></br>
                    <select id="font_seize_select" class="size_select"></select>
                </div>
                <div>
                    <lebel>文字の位置<lebel></br>
                    <select id="font_position_select">
                        <option value="0">左</option>
                        <option value="1">中央</option>
                        <option value="2">右</option>
                    </select>
                </div>
            </div>
            <hr class="float_clearA">
            <div class="gui_area">
                <textarea id="generation_heading_str"></textarea></br>
                <Button id="reset_bt" class="in_button bt_type_A" type="Button">リセット</Button>
                <Button id="insert_bt" class="in_button bt_type_B" type="Button">挿入</Button>
            </div>
            
        </div>
    </section>
    <!--モーダルB-->
    <section id="modal_area_B" class="modalArea">
        <div id="modal_bg_B" class="modalBg"></div>
        <div class="modalWrapper">
            <h2 class="h2_type_B">見出しを追加</h2>
            <hr class="hr_type_A">
        </div>
    </section>
    <!--モーダルC-->
    <section id="modal_area_C" class="modalArea">
        <div id="modal_bg_C" class="modalBg"></div>
        <div class="modalWrapper">
            <h2 class="h2_type_C">見出しを追加</h2>
            <hr class="hr_type_A">
        </div>
    </section>

    <section id="modal_area_D" class="modalArea">
        <div id="modal_bg_D" class="modalBg"></div>
        <div class="modalWrapper">
            <h2 class="h2_type_D">設定
            <?php
                switch($user_type){
                    case 0:
                        echo "　-一般権限-";
                        break;
                    case 1:
                        echo "　-学長権限-";
                        break;
                    case 2:
                        echo "　-副学長権限-";
                        break;
                    case 3:
                        echo "　-サイト管理者権限-";
                        break;
                }
            ?>
            </h2>
            <hr class="hr_type_A">
            <div class="modal_grid_D">
                <div class="modal_grid_left">
                    <ul>
                        <li>基本情報</li>
                        <?php
                            switch($user_type){
                                case 0:
                                    break;
                                case 1:
                                    echo "<li>学長の言葉</li>";
                                    break;
                                case 2:
                                    echo "<li>副学長の言葉</li>";
                                    break;
                                case 3:
                                    echo "<li>ユーザー追加</li>";
                                    echo "<li>ユーザー削除</li>";
                                    echo "<li>ユーザー変更</li>";
                                    break;
                            }
                        ?>
                    </ul>
                </div>
                <div class="modal_grid_right">
                    <div>
                        <div><label>チャンネル名</label></div>
                        <div><input type="text"></div>
                    </div>
                </div>
                <hr class="float_clearA">
            </div>
        </div>
    </section>


    <div id="modal-overlay"></div>

    <!--メインコンテンツ-->
    <div class="top">
        <div class="top_header">
            <h1>管理者ページ</h1>
            <?php
                $img_url = '<img id="open_modal_D" class="user_img" src="../media/img/user_img/'.$user_m_id.'.png">';
                echo $img_url;
            ?>
            <hr class="float_clearA">
        </div>
    </div>
    <div class="left_main_content">
        <div class="tabs">
            <input id="all" type="radio" name="tab_item" checked>
            <label class="tab_item" for="all">コード</label>
            <input id="programming" type="radio" name="tab_item">
            <label class="tab_item" for="programming">デザイン</label>
            <div class="tab_content" id="all_content">
                <div class="left_sub_content">
                    <ul class="add_content_list">
                        <li><img id="open_modal_A" title="見出しテンプレートを追加" src="./media/img/icon_heading.svg"></li>
                        <li><img id="open_modal_B" title="本文テンプレートを追加" src="./media/img/icon_text.svg"></li>
                        <li><img id="open_modal_C" title="画像を追加" src="./media/img/icon_img.svg"></li>
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
    <script type="text/javascript" src="./js/modal.js" ></script>
    <script type="text/javascript" src="./js/add_heading.js" ></script>
</body>
</html>