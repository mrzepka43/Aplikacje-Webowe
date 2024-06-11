<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<?php require('funkcje.php'); ?>
<?php
if (isset($_GET['czas'])) {
    $czas_zycia = $_GET['czas'];

    setcookie("ciastko", $czas_zycia, time() + (86400 * 30), "/");

    echo "Ciasteczko zostało utworzone pomyślnie!";
} else {
    echo "Nie podano czasu życia ciasteczka!";
}
?>
<p><a href="index.php"> aaaaaaa </a></p>
</body>
</html>