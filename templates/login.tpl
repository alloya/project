<!DOCTYPE html>
<html>
{include file="head.tpl"}
<body class="bg-block">
    <div class="centered-content-block">
        {include file="header.tpl"}
        <div class="clear"></div>
        <div class="main-block-content-container">
            <form action="include/user_login.php" method="POST">
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