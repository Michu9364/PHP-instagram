<?php

$string = file_get_contents("./login.json");
$json = json_decode($string, true);

$login = $json['login'];
$pass = $json['pass'];
$basename = $json['basename'];
$host = $json['host'];

$posttitle = $json['posttitle'];
$postdesc = $json['postdesc'];

$mysqli = new mysqli($host, $login, $pass, $basename);

if (!empty($_POST) && !empty($_FILES)) {

    $dest_url = '/posts/' . bin2hex(random_bytes(18)) . '.jpg';

    $q_title = $mysqli->real_escape_string($_POST[$posttitle]);
    $q_desc = $mysqli->real_escape_string($_POST[$postdesc]);

    $sql = "INSERT INTO `ig` (`url`, `title`, `description`) VALUES ('" . $dest_url . "','" . $q_title . "','" . $q_desc . "')";
    $results = $mysqli->query($sql);

    move_uploaded_file($_FILES['file']['tmp_name'], '.' . $dest_url);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BetterInsta.exe</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include 'fragments/header.php'; ?>
    <a href="/">
        <h1>Strona główna</h1>
    </a>

    <h2>Dodaj nowy post</h2>

    <form action="add.php" enctype="multipart/form-data" method="POST">
        <input type="file" name="file" id="file" accept="image/png, image/jpeg, image/jpg">

        <input type="text" name="title" id="title" placeholder="Tytuł">
        <input type="text" name="description" id="description" placeholder="Opis">

        <input type="submit" value="Dodaj" />
    </form>

</body>

</html>