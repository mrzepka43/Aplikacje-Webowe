<?php
session_start();
?>
<html>
<head>
    <meta content="text/html; charset=utf-8"/>
</head>
<body>
    <form action="file06_redirect.php" method="POST">
        id_prac <input type="text" name="id_prac">
        nazwisko <input type="text" name="nazwisko">
        <input type="submit" value="Wstaw">
        <input type="reset" value="Wyczysc">
    </form>
    <br/>
    <a href="file06_get.php"> Lista Pracowników </a>
    <?php
    if (isset($_SESSION['message'])) {
        echo "<br/>";
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
</body>
</html>