<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Find your book</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300italic' rel='stylesheet' type='text/css' />
</head>
<body class="bg_block">
    <div class="centered_content_block">
       <ul class="site_menu">
            <li><a href="../../index.php">Main</a></li>
            <li><a href="../about/about.php">About</a></li>
            <li><a href="../login/login.php">Login</a></li>
        </ul>
        <div class="clear"></div>
        <div class="right_text_block main_block_content_container">
            <span class="subtitle"><?=$newPage?></span>
            <div class="text_about">
                <?=$message?>
            </div>
            <div class="separator"></div>
            <a class="start_button" href="<?=$link?>"><?=$nextPage?></a>
        </div>
    </div>
</body>
</html>