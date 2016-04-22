<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8"/>
    <title>Skriva blogginlägg</title>
    <link rel="stylesheet" href="skriv_db.css">
</head>
<body>
    <h2>Registrera inlägg</h2>
    <form action="spara_db.php" method="post">
        <label>Rubrik</label><input type="text" maxlength="100" name="rubrik"><br>
        <label>Text</label><textarea name="inlagg"></textarea>
        <input type="submit" value="spara">
    </form>
</body>
</html>
