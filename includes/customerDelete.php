<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];

    try {
        require_once "db.inc.php";
        
        $query = "DELETE FROM customer WHERE username = ? AND email = ?;";
        
        $stmt = $pdo->prepare($query);
        
        $stmt->execute([$username, $email]);
        
        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();
    } catch (PDOException $e) {
        die("Query failed:" . $e->getMessage());
    }
} else {
        header("Location: ../index.php");
}