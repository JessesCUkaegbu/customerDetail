<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $phoneNum = $_POST["phoneNum"];
    $address = $_POST["address"];

    try {
        require_once "db.inc.php";
        
        $query = "INSERT INTO customer (username, email, phone, address) VALUES (?, ?, ?, ?);";
        
        $stmt = $pdo->prepare($query);
        
        $stmt->execute([$username, $email, $phoneNum, $address]);
        
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