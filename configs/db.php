<?php
$host = 'localhost';
$dbname = 'goldfern';
$username = 'root';
$password = '';

// $host = 'sql101.infinityfree.com';
// $dbname = 'if0_37174299_goldfern';
// $username = 'if0_37174299';
// $password = 'nl7Iya5UCGC';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

?>