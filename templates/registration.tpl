<!DOCTYPE html>
<html>
{include file="head.tpl"}
<body class="bg-block">
    <div class="centered-content-block">
       {include file="header.tpl"}
        <div class="clear"></div>
        <div class="main-block-content-container">
            <form action="include/user_registration.php" method="POST">
                <fieldset class="form">
                    <legend><span class="subtitle">Registration</span></legend>
                    <div class="form-group">
                        <label for="login">Логин</label>
                        <input name="login" id="login" placeholder="Введите логин" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input name="password" type="password" id="password" placeholder="Введите пароль" class="form-control">
                    </div>
                    <input type="submit" name="submit" value="Зарегистрироваться" class="btn btn-default">
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>