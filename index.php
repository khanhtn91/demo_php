<?php 
include './lib/database.php';
include 'router.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <section class="main">
        <?php include './view/layout/header.php'; ?>
        <?php include './view/layout/menu.php'; ?>
        
        <section class="s-main">
            <?php include './view/layout/menu_left.php'; ?>
            <div class="m-right">
            <?php include './view/layout/slider.php'; ?>
                <div class="mr-bottom">
                    <?php include './view/'.$view.'.php'; ?>
                </div>
            </div>
        </section>
        <?php include './view/layout/footer.php'; ?>
    </section>
</body>
</html>