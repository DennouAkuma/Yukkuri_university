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
            <div class="left_main_content">
            </div>
            <?php
                $side_number = 2;
                include './temp/side.php';

                for($i = 0;$i < 1000;$i++){
                    echo "</br>".'\n';
                }
            ?>


    </main>
    <footer>
        <?php
            include './temp/footer.php' ;
        ?>
    </footer>
</body>
</html>