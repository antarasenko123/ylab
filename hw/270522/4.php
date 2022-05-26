<?php
header('charset=utf-8');

/*
Доработать форму из пункта 2. При отправки формы, сохранять Имя и Фамилию в БД.
*/

// Дамп БД в файле ylab.sql

$server = "localhost";
$user = "root";
$pass = "";
$db = "ylab";

$conn = mysqli_connect("$server","$user","$pass") or die("Could not connect: ".mysqli_error());
mysqli_select_db($conn,$db) or die("Could not select database: ".mysqli_error());
mysqli_query($conn,"SET CHARACTER SET 'utf8'");
mysqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");

if($_POST['submit']) {
    if($_POST['surname'] != "" || $_POST['name'] != "")
    {
        echo "<h2>Привет, " . $_POST['surname'] . " " . $_POST['name'] . "</h2>";
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $surname = mysqli_real_escape_string($conn, $_POST['surname']);
        $sql = "INSERT INTO `ylab`.`users` (`ID` , `NAME` , `SURNAME`) VALUES (NULL , '$name' , '$surname')";
        $r=mysqli_query($conn , $sql) or die(mysqli_error($conn));
    }
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
