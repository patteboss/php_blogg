<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title>Spara inlägg</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php


        $host = 'localhost';
        $user = 'larsson_user';
        $pass = 'larsson_pass';
        $database = 'larsson_db';

        $conn = new mysqli($host, $user, $pass, $database);

        if ($conn->connect_error)
            die("Någonting blev fel:" . $conn->connect_error);

        $sql = "SELECT * from blogg";

        $result = $conn->query($sql);

        if (!$result)
            die("Kunde inte hämta inlägg: " . $conn->connect_error);

            echo "<h2>Alla inlägg i bloggen</h2>";

    echo "<p>Hittat " . $result->num_rows . " inlägg</p>";

    while ($row = $result->Fetch_assoc()) {
        echo "<article>";
        echo "<h3>" . $row['rubrik'] . "</h3>";
        echo "<h4>" . $row['timestamp'] . "</h4>";
        echo "<p>" . $row['inlagg'] . "</p>";
        echo "</article>";
    }
    $result->free();
    $conn->close();


        ?>
</body>

</html>
