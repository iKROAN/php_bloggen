<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Visa inlägg</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
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
    $sql = "SELECT * FROM bloggen2";
    // Kör sql-kommandot
    $result = $conn->query($sql);
    // Gick det bra eller inte?
    if (!$result)
        die("Kunde inte hämta inlägg: " . $conn->error);
    echo "<h2>Alla inlägg i bloggen</h2>";
    // Berätta hur många inlägg vi har
    echo "<p>Hittat " . $result->num_rows . " inlägg</p>";
    // Vi skriver alla inlägg
    while ($row = $result->fetch_assoc()) {
        echo "<article>";
        echo "<h3>" . $row['rubrik'] . "</h3>";
        echo "<h4>" . $row['tidstampel'] . "</h4>";
        echo "<p>" . $row['inlagg'] . "</p>";
        echo "</article>";
    }
    // Stäng ned databasanslutningen
    $result->free();
    $conn->close();
    ?>
</body>
</html>
