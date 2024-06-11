<?php
session_start();
$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$sql = "SELECT * FROM pracownicy";
$result = $link->query($sql);
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
    <a href="file06_post.php">Dodaj nowego pracownika</a>
    <br/><br/>
    <table>
        <tr>
            <th>ID_PRAC</th>
            <th>NAZWISKO</th>
        </tr>
        <?php
        foreach ($result as $v) {
            echo "<tr><td>" . $v["ID_PRAC"] . "</td><td>" . $v["NAZWISKO"] . "</td></tr>";
        }
        $result->free();
        $link->close();
        ?>
    </table>
</body>
</html>