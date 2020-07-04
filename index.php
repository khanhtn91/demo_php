<?php 
include './lib/database.php';
include 'router.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/assets/css/style.css">
</head>
<body>
    <section class="main">
        <?php include_once './view/layout/header.php'; ?>
        <?php include_once './view/layout/menu.php'; ?>
        
        <section class="s-main">
            <?php include_once './view/layout/menu_left.php'; ?>
            <div class="m-right">
            <?php include_once './view/layout/slider.php'; ?>
                <div class="mr-bottom">
                    <?php include_once './view/'.$view.'.php'; ?>
                </div>
            </div>
        </section>
        <?php include_once './view/layout/footer.php'; ?>
    </section>
</body>
</html>