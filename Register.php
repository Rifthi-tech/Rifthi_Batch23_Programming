<?php

include 'Clients Form.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $_POST['name'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL statement
    $sql = "INSERT INTO clients (name, address, contact, email) VALUES (:name, :address, :contact, :email)";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':contact', $contact);
    $stmt->bindParam(':email', $email);

    // Execute the statement
    $stmt->execute();

    
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
}
?>
