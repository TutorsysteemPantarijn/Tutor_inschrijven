<?php
// Gegevens van tutorinschrijvingen-database
$servername = "localhost";
$username = "gebruiker_gebruikersnaam";
$password = "password";
$dbname = "gebruiker_tutoren";

// POST-gegevens
$naam = $_POST["naam"];
$klas = $_POST["klas"]
$mentor = $_POST["mentor"];
$vak = $_POST["vak"];

// Verbinding maken met database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Error geven als er geen verbinding kan worden gemaakt met database
if (!$conn) {
    header("HTTP/1.1 400 Bad Request");
    die("ERROR: Connection failed: " . mysqli_connect_error());
}

// Error geven als de klas-string niet voldoet aan regex-pattroon
if (!preg_match("/a?\d(g|v|h|m|hv|mh)\d/g", $klas)) {
    header("HTTP/1.1 400 Bad Request");
    die("ERROR: Ongeldige klas");
}


$sql = "INSERT INTO inschrijvingen (naam, klas, mentor) VALUES (' ".$naam." ',' ".$klas." ',' ".$mentor." ')";

if (mysqli_query($conn, $sql)) {
    echo "Succesvol ingescreven.";
} else {
    // Error geven als het niet is gelukt om de data in de tabel te douwen
    header("HTTP/1.1 400 Bad Request");
    die("ERROR: " . mysqli_error($conn));
}

mysqli_close($conn);

?>
