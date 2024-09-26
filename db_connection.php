<?php
// db_connection.php
$dsn = 'mysql:host=localhost;dbname=u971440539_smkislambatu'; // Your database details
$username = 'root'; // Your DB username
$password = ''; // Your DB password

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
?>
