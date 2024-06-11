<?php
session_start();
$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if (!$link) {
    $_SESSION['message'] = "Connect failed: " . mysqli_connect_error();
    header("Location: file06_post.php");
    exit();
}

if (isset($_POST['id_prac']) && is_numeric($_POST['id_prac']) && is_string($_POST['nazwisko'])) {
    try {
        $sql = "INSERT INTO pracownicy(id_prac, nazwisko) VALUES(?, ?)";
        $stmt = $link->prepare($sql);
        
        if ($stmt === false) {
            throw new Exception("Prepare failed: " . htmlspecialchars($link->error));
        }
    
    
    $stmt->bind_param("is", $_POST['id_prac'], $_POST['nazwisko']);
    $result = $stmt->execute();
    if (!$result) {
        $_SESSION['message'] = "Query failed: " . mysqli_error($link);
        header("Location: file06_post.php");
        exit();
    }
    $stmt->close();
    $_SESSION['message'] = "Dodano nowego pracownika.";
    header("Location: file06_get.php");
    exit();
} catch (Exception $e) {
    $_SESSION['message'] = $e->getMessage();
    header("Location: file06_post.php");
    exit();}
} else {
    $_SESSION['message'] = "Invalid input data.";
    header("Location: file06_post.php");
    exit();
}
?>