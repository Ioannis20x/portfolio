<?php
$servername = "ioannisdev.de";
$dbuser = "samp";
$dbpas = "password";
$dbname = "shopseite";

$dbhandle = new mysqli($servername, $dbuser, $dbpas,$dbname);

if ($dbhandle->connect_error) {
    die("Verbindung fehlgeschlagen: " . $dbhandle->connect_error);
} else {

   // echo "VERBINDUNG: ERFOLG! <br>";
}

function dbaction($handle, $query)
{
    if ($handle->connect_error) {
        die("Verbindung fehlgeschlagen: " . $handle->connect_error);
    } else {

        if ($handle->query($query) === TRUE) {
            echo "QUERY: ERFOLG! <br>";
        } else {
            echo "QUERY: FEHLER( " . $handle->error . ")<br>";
        }
    }
}

?>