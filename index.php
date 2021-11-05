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
                <img class="department_img" src="./media/img/department/department_A.svg">
                <img class="department_img" src="./media/img/department/department_B.svg">
                <img class="department_img" src="./media/img/department/department_C.svg">
                <img class="department_img" src="./media/img/department/department_D.svg">
                <img class="department_img" src="./media/img/department/department_E.svg">
                <img class="department_img" src="./media/img/department/department_F.svg">
                <img class="department_img" src="./media/img/department/department_G.svg">
                <img class="department_img" src="./media/img/department/department_H.svg">
                <img class="department_img" src="./media/img/department/department_I.svg">
                <img class="department_img" src="./media/img/department/department_J.svg">
            </div>
            <hr class="float_clearA">

            <!--後に消すのを忘れないこと-->
            <div id="page_log">
                <label>
                    ホームページの更新ログです<br>
                    ※このログはホームページの開発が終わり次第非表示にします
                </label><br>
                <textarea id="update_log" readonly>        
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

