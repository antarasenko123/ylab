<?php
/*
Задача №2. Создать форму с полями: Имя, Фамилия и кнопка “Отправить”.
После нажатия на кнопку на странице должны отобразиться данные из формы.
В виде строки “Привет, (Фамилия) (Имя)”.
*/

if($_POST['submit']) {
    if($_POST['surname'] != "" || $_POST['name'] != "") echo "<h2>Привет, " . $_POST['surname'] . " " . $_POST['name'] . "</h2>";
    else echo "<h2>Заполните форму!</h2>";
}
?>

<form method="POST" action="">
    <fieldset>
        <legend>Заполните форму</legend>
        <p><label for="name">Имя: </label><input type="text" id="name" name="name"></p>
        <p><label for="surname">Фамилия: </label><input type="text" id="surname" name="surname"></p>
        <p><input type="submit" name="submit" value="Отправить"></p>
    </fieldset>
</form>
