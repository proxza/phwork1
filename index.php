<?php



?>
<html>
<head>
    <title>Страница авторизации</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<header>
    <span class="logo">logo.png</span>
</header>

<nav>
    <a href="#enter">Вход</a>
</nav>

<main>
        &nbsp;
        <form action="index.php" method="post" id="enter">
            <table>
                <thead class="table-head">
                <tr><td colspan="2" class="table-head-text">Форма входа</td></tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                </thead>
                <tbody>
                <tr><td class="table-td-text"> Логин: </td><td><input type="text" name="username" placeholder="Введите ваше имя" maxlength="20" class="table-td-input"> </td></tr>
                <tr><td class="table-td-text"> Пароль: </td><td><input type="password" name="userpass" placeholder="Введите ваш пароль" maxlength="15" class="table-td-input"> </td></tr>
                <tr><td class="table-td-text"> Ваш пол: </td><td><select name="gender"><option value="0">Выберите пол</option><option value="1">Мужчина</option><option value="2">Женщина</option></select></td></tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td colspan="2" class="table-checkbox">Запомнить меня <input type="checkbox" value="1" name="remember"> </td></tr>
                </tbody>
                <tfoot class="table-foot">
                <tr><td colspan="2"> <hr> </td></tr>
                <tr><td colspan="2"> <input type="submit" value="Войти" class="btn"> </td></tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td colspan="2"><span class="little-text">Забыл пароль? | Регистрация</span></td></tr>
                </tfoot>
            </table>

        </form>
</main>

<footer>
    copypast (c) 2k16
</footer>

</body>

</html>
