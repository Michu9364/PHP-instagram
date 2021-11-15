<?php

$string = file_get_contents("./login.json");
$json = json_decode($string, true);

$login = $json['login'];
$pass = $json['pass'];
$basename = $json['basename'];
$host = $json['host'];

$postid = $json['postid'];
$posturl = $json['posturl'];
$posttitle = $json['posttitle'];
$postdesc = $json['postdesc'];

$mysqli = new mysqli($host, $login, $pass, $basename);

$sql = "SELECT * FROM `ig` WHERE id=" . $mysqli->real_escape_string($_GET[$postid]) . ";";
$results = $mysqli->query($sql);
$values = $results->fetch_assoc();
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
        <h2>Strona główna</h2>
    </a>
    <form method="get" action="/add.php">
        <button type="submit" class="button">Dodaj nowy post</button>
    </form><br>
    
    <h3>
        <?php echo $values[$posttitle] ?>
    </h3>
    <img width="300" src="<?php echo $values[$posturl] ?>" />
    <p>
        <?php echo $values[$postdesc] ?>
    </p>

</body>

</html>