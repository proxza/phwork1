<?php

session_start(); // Стартуем сессию

// Условие выполняющееся при нажатии на кнопку "выход". Посылается GET'ом. Если ссылка нажата - удаляет переменную uname и закрывает сессиию
if (isset($_GET['exit']) && $_GET['exit'] == 0){
    $enter = 0;
    unset($_SESSION['uname']);
    session_destroy();
}

// Проверка нажата ли кнопка (submit), не пустое ли поле Логин (username), поставил ли пользователь галочку "запомнить меня"
if (isset($_POST['submit']) && !empty($_POST['username']) && isset($_POST['remember'])){
    // Если все условия верны - заносим в сессию введенные данные (логин - uname/пароль - passwd/пол - gend)
        $_SESSION['uname'] = $_POST['username'];
        $_SESSION['passwd'] = $_POST['userpass'];
        $_SESSION['gend'] = $_POST['gender'];
        $enter = 1; // переменная "переключатель"
}

// Проверка на существование в сессии переменной с логином
if (isset($_SESSION['uname'])){
    $enter = 1;
}else{
    $enter = 0;
}

/**
 * Функция определения пола
 * @param $pol type: int
 */
function gender($pol)
{
    switch ($pol){
        case 0:
            echo "Неопределившийся пользователь";
            break;
        case 1:
            echo "Уважаемый";
            break;
        case 2:
            echo "Уважаемая";
    }
}

?>
<!DOCTYPE html>
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

    <?php
    // Отображение ссылок в меню на вход-выход
    if ($enter == 1){
        echo '<a href="index.php?exit=0">Выйти</a>';
    }else{
        echo '<a href="#enter">Войти</a>';
    }

    ?>
</nav>

<main>

    <span class="hello-text">
    <?php
    // Вывод приветствия с учетом пола пользователя
    if ($enter == 1){
        echo gender($_SESSION['gend']) . ', ' . $_SESSION['uname'] .' мы вас запомнили!';
    }else {

    ?>
    </span>
        &nbsp;
        <form action="index.php" method="post" id="enter">
            <table>
                <thead class="table-head">
                <tr>
                    <td colspan="2" class="table-head-text">Форма входа</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="table-td-text"> Логин:</td>
                    <td><input type="text" name="username" placeholder="Введите ваше имя" maxlength="20"
                               class="table-td-input"></td>
                </tr>
                <tr>
                    <td class="table-td-text"> Пароль:</td>
                    <td><input type="password" name="userpass" placeholder="Введите ваш пароль" maxlength="15"
                               class="table-td-input"></td>
                </tr>
                <tr>
                    <td class="table-td-text"> Ваш пол:</td>
                    <td align="left"><select name="gender">
                            <option value="0">Выберите пол</option>
                            <option value="1">Мужчина</option>
                            <option value="2">Женщина</option>
                        </select></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2" class="table-checkbox">Запомнить меня <input type="checkbox" value="1"
                                                                                 name="remember"></td>
                </tr>
                </tbody>
                <tfoot class="table-foot">
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Войти" class="btn" name="submit"></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2"><span class="little-text">Забыл пароль? | Регистрация</span></td>
                </tr>
                </tfoot>
            </table>

        </form>

        <?php

    }

    ?>
</main>

<footer>
    copyrights (c) 2k16
</footer>

</body>

</html>
