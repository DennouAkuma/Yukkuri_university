<?php
include "./admin/temp/root.php";

$db_link = new mysqli($mysql_host_A, $mysql_user_A, $mysql_pass_A,$mysql_db_A);
if (!$db_link) {
    die('接続失敗'.mysqli_error());
}

$sql_select = 'select * from base_info where 1 = authority_int or 2 = authority_int or 3 = authority_int order by authority_int';

$user_id_array = array();
$user_name_array = array();
$user_text_array = array();
$esta_text_array = array();

$result_sql = mysqli_query($db_link,$sql_select);

if(!$result_sql){
    die('失敗'.mysqli_error());
}else{
    while ($row = mysqli_fetch_assoc($result_sql)) {
        array_push($user_id_array,$row['m_id']);
        array_push($user_name_array,$row['name_str']);
        array_push($user_text_array,$row['greeting_text']);
        array_push($esta_text_array,$row['establishment_text']);
    }        
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
        <div class="margin_div bc_imgA">
            <div>
                <h1>学校概要</h1>
            </div>
        </div>
        <div class="content_main">
            <div class="left_main_content">
                <!--学長-->
                <h2 id="so_A" class="sub_title_h2_A"><?php echo $user_name_array[0]; ?>学長の言葉</h2>
                <div class="left_sub_contentA">
                <?php echo $user_text_array[0];?>
                </div>
                <div class="right_sub_contentA">
                    <?php echo '<img src="./media/img/user_img/'.$user_id_array[0].'/pf_img.png">';?>
                    <h2>氏名</h2>
                    <h3><?php echo $user_name_array[0]; ?></h3>
                </div>
                <hr class="float_clearA">

                <!--副学長-->
                <h2 id="so_B" class="sub_title_h2_A"><?php echo $user_name_array[1]; ?>副学長の言葉</h2>
                <div class="left_sub_contentB">
                    <?php echo '<img src="./media/img/user_img/'.$user_id_array[1].'/pf_img.png">';?>
                    <h2>氏名</h2>
                    <h3><?php echo $user_name_array[1]; ?></h3>
                </div>
                <div class="right_sub_contentB">
                <?php echo $user_text_array[1];?>
                </div>
                <hr class="float_clearA">

                <!--副学長-->
                <h2 id="so_B" class="sub_title_h2_A"><?php echo $user_name_array[2]; ?>副学長の言葉</h2>
                <div class="left_sub_contentA">
                    <?php echo $user_text_array[2];?>
                </div>
                <div class="right_sub_contentA">
                    <?php echo '<img src="./media/img/user_img/'.$user_id_array[2].'/pf_img.png">';?>
                    <h2>氏名</h2>
                    <h3><?php echo $user_name_array[2]; ?></h3>
                </div>
                <hr class="float_clearA">

                <h2 id="so_C" class="sub_title_h2_A">設立目的</h2>
                <?php echo $esta_text_array[0]; ?>
                <hr class="float_clearA">

                <h2 id="so_D" class="sub_title_h2_A">大学の沿革</h2>
                    <ul id="history_ul">
                        <li><p>2021年9月25日</p><p>Discordサーバー設立</p></li>
                        <li><p>2021年9月27日</p><p>サーバー名が「ゆっくり大学教務室」決定</p></li>
                        <li><p>2021年10月2日</p><p>ゆっくり大学公式YouTubeチャンネル開設</p></li>
                        <li><p>2021年10月5日</p><p>ゆっくり大学公式Twitterアカウント開設</p></li>
                        <li><p>2021年10月17日</p>
                            <p>副学長にSAGch氏が就任</br>
                            副学長にゆっくり小鈴氏が就任</br>
                            派生Discordサーバー「Youtube研究Archives」供用開始</p></li>
                        <li><p>2021年10月24日</p>
                            <p>チャンネル等の大幅な変更、役割を明確に</br>
                            第一回ゆっくり大学運営会議を執行</p></li>
                        <li><p>2021年10月29日</p><p>第一回リモート飲み会を開催</p></li>
                        <li><p>2021年10月29日</p><p>派生Discordサーバー「ゆっくり大学学食」を開設</p></li>
                        <li><p>202X年XX月XX日</p><p>公式サイト「ゆっくり大学」を開設</p></li>
                    </ul>
                <hr class="float_clearA">
                <h2 id="so_E" class="sub_title_h2_A">広報</h2>
                <iframe width="800" height="450" 
                src="https://www.youtube.com/embed/KT1xfaQwNf0"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
                <hr class="float_clearA">
                <h2 id="so_F" class="sub_title_h2_A">情報の扱い</h2>
                <hr class="float_clearA">
            </div>
            <?php
                $side_number = 0;
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