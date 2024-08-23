<?php
// Database connection
require("configs/db.php");
// Get the HTTP method
$method = $_SERVER['REQUEST_METHOD'];

// Fetch the input data (for POST, PUT requests)
$input = json_decode(file_get_contents('php://input'), true);
// $property = null;

// Route handling
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

// Fetch all properties from the database
$stmt = $pdo->query("SELECT * FROM agents");
$agents = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the property from the database by ID
    $stmt = $pdo->prepare("SELECT * FROM agent WHERE id = ?");
    $stmt->execute([$id]);
    $agent = $stmt->fetch(PDO::FETCH_ASSOC);

}
?>

