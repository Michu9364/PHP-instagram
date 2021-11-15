<?php

$string = file_get_contents("./login.json");
$json = json_decode($string, true);

$login = $json['login'];
$pass = $json['pass'];
$basename = $json['basename'];
$host = $json['host'];

$postid = $json['postid'];
$posturl = $json['posturl'];

$mysqli = new mysqli($host, $login, $pass, $basename);

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
    <h2>Twoja galeria zdjęć</h2>
    <form method="get" action="/add.php">
        <button type="submit" class="button">Dodaj nowy post</button>
    </form>

    <ul>
        <?php

        $query = $mysqli->query('SELECT * from ig');

        while ($row = $query->fetch_assoc()) {
        ?>
            <li>
                <a href="<?php echo "/image.php?id=" . $row[$postid] ?>">
                    <div class="img" style="background-image: url( <?php echo $row[$posturl] ?>)">

                    </div>
                </a>
            </li><?php
        }
        ?>
    </ul>

</body>

</html>