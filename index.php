<!doctype html>
<html>
<head>
<?php
    $title_str = "ゆっくり大学";
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
        <!--スライドー-->
        <div id="slide_content">
            <div id="slide_all">
                <img src="./media/img/slide_0.png">
                <a href="https://www.youtube.com/channel/UCA1seqQMJaleBrIGN2RPIEg/featured">
                    <img src="./media/img/slide_1.png">
                </a>
                <img src="./media/img/slide_0.png">
                <img src="./media/img/slide_0.png">
                <img src="./media/img/slide_0.png">
                <img src="./media/img/slide_0.png">
            </div>
        </div>

        <!--ピックアップ-->
        <div>
            <div class="sub_title_div icon_a">
                <h2>注目情報</h2>
            </div>
            <div id="pickup_content">
                <div class="pu_sub_content">
                    <img src="./media/img/test1.png">
                    <h3>hogehoge</h3>
                    <p>hogehogefugafguapiyopiyo<p>
                </div>
                <div class="pu_sub_content">
                    <img src="./media/img/test1.png">
                    <h3>hogehoge</h3>
                    <p>hogehogefugafguapiyopiyo<p>
                </div>
                <div class="pu_sub_content">
                    <img src="./media/img/test1.png">
                    <h3>hogehoge</h3>
                    <p>hogehogefugafguapiyopiyo<p>
                </div>
                <div class="pu_sub_content">
                    <img src="./media/img/test1.png">
                    <h3>hogehoge</h3>
                    <p>hogehogefugafguapiyopiyo<p>
                </div>
                <div class="pu_sub_content">
                    <img src="./media/img/test1.png">
                    <h3>hogehoge</h3>
                    <p>hogehogefugafguapiyopiyo<p>
                </div>
                <div class="pu_sub_content">
                    <img src="./media/img/test1.png">
                    <h3>hogehoge</h3>
                    <p>hogehogefugafguapiyopiyo<p>
                </div>
                <div class="pu_sub_content">
                    <img src="./media/img/test1.png">
                    <h3>hogehoge</h3>
                    <p>hogehogefugafguapiyopiyo<p>
                </div>
                <div class="pu_sub_content">
                    <img src="./media/img/test1.png">
                    <h3>hogehoge</h3>
                    <p>hogehogefugafguapiyopiyo<p>
                </div>
                <hr class="float_clearA">
            </div>
        </div>

        <!--ニュース-->
        <div id="bc_news">
            <div class="sub_title_div icon_b">
                <h2>ニュース</h2>
            </div>
            <div class="tabs">
                <input id="all" type="radio" name="tab_item" checked>
                <label class="tab_item" for="all">重要なお知らせ</label>
                <input id="programming" type="radio" name="tab_item">
                <label class="tab_item" for="programming">ニュース</label>
                <div class="tab_content" id="all_content">

                    <div class="tab_sub_content">
                        <label>2000年1月1日</label><a href="#"><p>hogehoge</p></a>
                        <hr class="float_clearA">
                    </div>
                    <div class="tab_sub_content">
                        <label>2000年1月1日</label><a href="#"><p>hogehoge</p></a>
                        <hr class="float_clearA">
                    </div>
                    <div class="tab_sub_content">
                        <label>2000年1月1日</label><a href="#"><p>hogehoge</p></a>
                        <hr class="float_clearA">
                    </div>
                    <div class="tab_sub_content">
                        <label>2000年1月1日</label><a href="#"><p>hogehoge</p></a>
                        <hr class="float_clearA">
                    </div>
                    <div class="tab_sub_content">
                        <label>2000年1月1日</label><a href="#"><p>hogehoge</p></a>
                        <hr class="float_clearA">
                    </div>
                </div>
                <div class="tab_content" id="programming_content">

                    <div class="tab_sub_content">
                        <label>2000年1月1日</label><a href="#"><p>hogehoge</p></a>
                        <hr class="float_clearA">
                    </div>
                    <div class="tab_sub_content">
                        <label>2000年1月1日</label><a href="#"><p>hogehoge</p></a>
                        <hr class="float_clearA">
                    </div>
                    <div class="tab_sub_content">
                        <label>2000年1月1日</label><a href="#"><p>hogehoge</p></a>
                        <hr class="float_clearA">
                    </div>
                    <div class="tab_sub_content">
                        <label>2000年1月1日</label><a href="#"><p>hogehoge</p></a>
                        <hr class="float_clearA">
                    </div>
                    <div class="tab_sub_content">
                        <label>2000年1月1日</label><a href="#"><p>hogehoge</p></a>
                        <hr class="float_clearA">
                    </div>

                </div>
            </div>
        </div>

        <!--学科情報-->
        <div id="bc_change">
            <div id="department_div">
                <div class="sub_title_div icon_c">
                    <h2>学部学科情報</h2>
                    <p>Department</p>
                </div>
                <hr class="float_clearA">
                <img class="department_img" src="./media/img/department/test1.svg">
                <img class="department_img" src="./media/img/department/test2.svg">
                <img class="department_img" src="./media/img/department/test1.svg">
                <img class="department_img" src="./media/img/department/test2.svg">
                <img class="department_img" src="./media/img/department/test1.svg">
                <img class="department_img" src="./media/img/department/test2.svg">
                <img class="department_img" src="./media/img/department/test1.svg">
                <img class="department_img" src="./media/img/department/test2.svg">
                <img class="department_img" src="./media/img/department/test1.svg">
                <img class="department_img" src="./media/img/department/test2.svg">
            </div>
            <hr class="float_clearA">

            <!--後に消すのを忘れないこと-->
            <div id="page_log">
                <label>
                    ホームページの更新ログです<br>
                    ※このログはホームページの開発が終わり次第非表示にします
                </label><br>
                <textarea id="update_log" readonly>
                    # Change Log

                    ## 2021-11-05
                    ### Added(新機能)
                    - 学部学科情報の項目を追加
                    - 注目情報の項目を追加(未完成)
                    - ニュースの項目を追加(未完成)
                    
                    ### Changed(既存機能の変更)
                    - メニューの幅を変更
                    - 学長の言葉を移動
                    - 全体フォントをメイリオに変更
                    - メニューをメガプルダウン式に変更
                    
                    ### Security(将来的修正推奨)
                    - 学長ページの早期追加
                    - 設立目的ページの早期追加
                    - 大学の沿革ページの早期追加
                    - 広報ページの早期追加
                    - 情報の扱いページの早期追加
                    - 各学科ページの早期追加
                    - 教授紹介ページの早期追加
                    - ディスコード誘導機能の早期追加
                    - 教授専用ページの早期追加
                    - 記事投稿機能の早期追加
                    - お問い合わせページの早期追加
                    
                    
                    ## 2021-10-04
                    ### Added(新機能)
                    -　gui_style.cssを追加(テンプレート系を入れてあります)
                    
                    ### Changed(既存機能の変更)
                    - header幅を100%に変更
                    - プロフィール(index.html)の構成を変更
                    - footerの構成を変更
                    - サインを右側に変更
                    - 横幅の固定化を100%に変更
                    - mainの最低高さを追加
                    - style.cssをmain_style.cssに名前を変更
                    - 紹介部分ページのゆっくりの構成を変更
                    
                    ### Removed(削除された機能)
                    - headerのid削除
                    - mainのid削除
                    - footerのid削除
                    - スライドのmainタグ削除
                    - h1,class「.wordkocho」削除
                    - スライドの17px分を修正
                    - スライドのボーダーラインを削除
                    
                    ### Fixed(バグの修正)
                    - サイン画像のパスを修正
                    - ゆっくりの画像のパスを修正
                    
                    ### Security(将来的修正推奨)
                    - cssファイルをページ毎(そのページのみに適用の場合)に分けることを推奨
                    - スライドのウインドウサイズ変更時の処理を追加することを推奨
                    - モバイル端末に対応させることを推奨
                    
                    ## 2021-10-03
                    ### Changed(既存機能の変更)
                    - cssのスライドをJSに変更
                    - スライド部分のidを変更
                    
                    ### Fixed(バグの修正)
                    - 画面外に出ていたスライド部分を修正
                    
                    ## 2021-10-02 変更点
                    ### Added(新機能)
                    - HTML5宣言を追加
                    - SEO対策、metaを追加
                    - アイコンを設定
                    - main、footerを追加
                    
                    ### Changed(既存機能の変更)
                    - ディレクトリーを変更
                    - ./css → cssファイル
                    - ./js → JavaScriptファイル
                    - ./media → 画像や動画などのメディアデータ
                    - html直書きのstyleを削除　→　style.cssファイルに移動
                    - 隙間構成を変更
                    - title_logo(id)を追加 → ロゴ部分
                    - menu_ul(id)を追加 → メニュー部分
                    - float_clearA(class)を追加 → フロート解除
                    - content部分にhtml直書き部分を移行
                    
                    ### Removed(削除された機能)
                    - その他、margin指定の部分を複数削除
                    
                    
                </textarea>
            </div>
        </div>
    </main>
    
    <footer>
        <?php
            include './temp/footer.php' ;
        ?>
    </footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
    <script type="text/javascript" src="./js/slide.js"></script>
    <script type="text/javascript" src="./js/traffic.js"></script>
</body>
</html>

