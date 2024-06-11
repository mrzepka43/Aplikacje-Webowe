<?php 
session_start(); 
if (isset($_POST['wyloguj'])) { 
    $_SESSION['zalogowany'] = 0; 
    header('Location: index.php'); 
    exit(); 
} 

if(isset($_COOKIE['ciastko'])){
    $wartosc_ciasteczka = $_COOKIE['ciastko'];
    echo "Wartość ciasteczka: $wartosc_ciasteczka";
}
?>
<!DOCTYPE html> 
<html> 
<head> 
    <title>Formularz logowania</title> 
    <meta charset="UTF-8"> 
</head> 
<body> 
    <h1><?php echo "Nasz system"; ?></h1> 
    <form action="logowanie.php" method="POST"> 
        <fieldset>
            <legend>Zaloguj</legend>
            <label for="login">Login:</label> 
            <input type="text" id="login" name="login"><br><br> 
            <label for="haslo">Hasło:</label> 
            <input type="password" id="haslo" name="haslo"><br><br> 
            <input type="submit" value="Zaloguj" name="zaloguj"> 
        </fieldset>
    </form> 

    <fieldset>
        <legend>Utwórz Cookie</legend>
        <form action="cookie.php" method="GET"> 
            <label for="czas">Czas życia cookie (w sekundach):</label> 
            <input type="number" id="czas" name="czas"><br><br> 
            <input type="submit" value="Utwórz Cookie" name="utworzCookie"> 
        </form> 
    </fieldset>

    <p><a href="user.php">Przejdź do strony użytkownika</a></p> 
</body> 
</html>
