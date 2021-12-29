<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="muzyka.css">
    <title>Sklep muzyczny</title>
</head>
<body>
        <header>
            <h1>SKLEP MUZYCZNY</h1>
        </header>

        <section id="lewy">
            <h2>NASZA OFERTA</h2>
            <ol>
                <li>Instrumenty muzyczne</li>
                <li>Sprzęt audio</li>
                <li>Płyty CD</li>
            </ol>
        </section>

        <section id="prawy">
                <h2>FORMULARZ REJESTRACYJNY</h2>
                <?php 
                
                $serwer = "localhost";
                $user = "root";
                $pass = "";
                $db = "kwiczki";
        
                $conn = mysqli_connect($serwer, $user, $pass, $db);
                if($conn)
                {
                    $imie = $_POST["imie"];
                    $nazwisko = $_POST["Nazwisko"];
                    $adres = $_POST["Adres"];
                    $telefon = $_POST["Telefon"];
                    $login = $_POST["login"];
                    $haselko = $_POST["haslo"];
                    $sql1 = "INSERT INTO uzytkownicy VALUES('', '$imie', '$nazwisko', '$adres', '$telefon')";
                    $sql2 = "INSERT INTO konta VALUES ('', '$login', '$haselko')";
                    $result = mysqli_query($conn, $sql1);
                    $result2 = mysqli_query($conn, $sql2);
                    
                    if($result && $result2)
                    {
                        echo "Konto ".$imie." ".$nazwisko." zostało utworzone pomyślnie!";     
                    }
                    
                    mysqli_close($conn);
               
                }
                
                ?>
            </section>


</body>
</html>

