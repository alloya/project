<!DOCTYPE html>
<html>
{include file="head.tpl"}
<body class="bg_block">
    <div class="centered_content_block">
        {include file="header.tpl"}
        <div class="clear"></div>
        <div class="right_text_block main_block_content_container">
            <form action="userlogin.php" method="POST">
                <fieldset class="form">
                    <legend><span class="subtitle">Login</span></legend>
                    <div class="form-group">
                        <label for="login">Логин</label>
                        <input name="login" id="login" placeholder="Введите логин" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input name="password" type="password" id="password" placeholder="Введите пароль" class="form-control">
                    </div>
                    <button type="submit" id="btn-submit" class="btn btn-default">Войти</button>
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>