<?php
require('funkcje.php'); 

session_start(); 

if (isset($_POST['zaloguj'])) { 
    $login = test_input($_POST['login']); 
    $haslo = test_input($_POST['haslo']); 

    
    if ($login == 'adam' && $haslo == 'adam2020') {
        $_SESSION['zalogowanyImie'] = 'Adam Kowalski'; 
        $_SESSION['zalogowany'] = 1; 
        header('Location: user.php'); 
        exit();
    } elseif ($login == 'agata' && $haslo == '2020agata') {
        $_SESSION['zalogowanyImie'] = 'Agata Nowak'; 
        $_SESSION['zalogowany'] = 1; 
        header('Location: user.php'); 
        exit();
    } else {
        header('Location: index.php');
        exit();
    }
}
?>