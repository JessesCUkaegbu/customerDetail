<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $phoneNum = $_POST["phoneNum"];

    try {
        require_once "db.inc.php";
        
        $query = "UPDATE customer SET username = ?, email = ?, phone = ? WHERE id = 5;";
        
        $stmt = $pdo->prepare($query);
        
        $stmt->execute([$username, $email, $phoneNum]);
        
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