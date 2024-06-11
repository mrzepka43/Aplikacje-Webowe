<?php
session_start();
if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == 1) {
    
}else{
    header('Location: index.php');
    exit(); 
}
?>
<!DOCTYPE html>
    <html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
    </head>
    <body>
        <?php
            echo $_SESSION['zalogowanyImie'];
        ?>

        
            <?php
                $currentDir = getcwd();
                $uploadDirectory = "/zdjeciaUzytkownikow/";
                if(isset($_FILES['myfile'])){
                    $fileName = $_FILES['myfile']['name'];
                    $fileTmpName = $_FILES['myfile']['tmp_name'];
                    $fileType = $_FILES['myfile']['type'];
                    $fileSize = $_FILES['myfile']['size'];

    
                    if ($fileName != "" && ($fileType == 'image/png' || $fileType == 'image/jpg' || $fileType == 'image/jpeg')) {
                        $uploadPath = $currentDir . $uploadDirectory . $fileName;
        
                        if (move_uploaded_file($fileTmpName, $uploadPath)) {
                            echo "Zdjęcie zostało załadowane na serwer.";
                        } else {
                            echo "Wystąpił błąd podczas przesyłania pliku.";
                        }
                    } 
                }
            ?>
            
        


    <form action="user.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit" value="Prześlij plik" name="submit">
    </form>


        <form action="index.php" method="POST">
            <input type="submit" name="wyloguj" value="Wyloguj">
        </form>

    <?php
        if(isset($uploadPath)){
            echo "<img src='$uploadDirectory/$fileName' alt='Zdjęcie'>";
        }
    ?>
        <p><a href="index.php"> aaaaaaa </a></p>
    </body>
</html>