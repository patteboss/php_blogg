<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title>Spara inlägg</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        $rubrik = $_POST['rubrik'];
        $inlagg = $_POST['inlagg'];

        $host = 'localhost';
        $user = 'larsson_user';
        $pass = 'larsson_pass';
        $database = 'larsson_db';

        $conn = new mysqli($host, $user, $pass, $database);

        if ($conn->connect_error)
            die("Någonting blev fel:" . $conn->connect_error);

        $sql = "INSERT INTO blogg (rubrik, inlagg) VALUES ('$rubrik', '$inlagg')";

        $result = $conn->query($sql);

        if (!$result)
            die("Kunde inte spara inlägg: " . $conn->connect_error);
        else
            echo "<h3>Ditt inlägg är registrerat</h3>";

    $conn->close();


        ?>
</body>

</html>
