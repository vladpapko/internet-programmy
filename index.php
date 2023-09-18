<!DOCTYPE html>
<html>
<head>
    <title>Простая форма на PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"></head>

</head>
<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
    </header>
</div>
<body>
<h1>Введите ваши данные:</h1>
<form method="POST" action="">
    <label for="имя">Имя:</label>
    <input type="text" name="имя" id="имя"><br>

    <label for="фамилия">Фамилия:</label>
    <input type="text" name="фамилия" id="фамилия"><br>

    <label for="группа">Группа:</label>
    <input type="text" name="группа" id="группа"><br>

    <input type="submit" value="Отправить">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $имя = $_POST["имя"];
    $фамилия = $_POST["фамилия"];
    $группа = $_POST["группа"];

    echo "Привет, " . $имя . " " . $фамилия . " из группы " . $группа . "!";
}
?>
</body>
</html>

