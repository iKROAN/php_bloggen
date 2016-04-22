<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Spara inlägg</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // Ta emot data från formuläret
    $rubrik = $_POST['rubrik'];
    // Gör om radslut till taggen <br>
    $inlagg = nl2br($_POST['inlagg'], false);
    // Databasuppgifter
    $host = 'localhost';
    $user = 'ryde_user';
    $pass = 'ryde_pass';
    $database = 'ryde_db';
    // Anslut till databasen
    $conn = new mysqli($host, $user, $pass, $database);
    // Om någonting går fel. Avsluta med ett felmeddelande
    if ($conn->connect_error)
        die("Någonting blev fel: " . $conn->connect_error);
    // Vårt sql-kommando
    $sql = "INSERT INTO bloggen2
            (rubrik, inlagg) VALUES
            ('$rubrik', '$inlagg')";
    // Kör sql-kommandot
    $result = $conn->query($sql);
    // Gick det bra eller inte?
    if (!$result)
        die("Kunde inte spara inlägg: " . $conn->error);
    else
        echo "<h3>Ditt inlägg är registrerat</h3>";
    // Stäng ned databasanslutningen
    $conn->close();
    ?>
</body>
</html>
