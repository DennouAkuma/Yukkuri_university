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
                }
            ?>
            <div class="left_main_content">
                <?php 
                    include './u_page/U001_page.php'
                ?>
            </div>
            <?php
                include './temp/side.php';
            ?>
            <hr class="float_clearA">
    </main>
    <footer>
        <?php
            include './temp/footer.php' ;
        ?>
    </footer>
</body>
</html>