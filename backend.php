<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datastore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Secure hashing using SHA-256
    $encript_name = hash('sha256', $name);
    $encript_email = hash('sha256', $email);
    $encript_phone = hash('sha256', $phone);

    // Prepared statement to prevent SQL injection
    $sql = $conn->prepare("INSERT INTO customer (name, email, phone) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $encript_name, $encript_email, $encript_phone);
    
    if ($sql->execute()) {
        // Redirect to success page
        header("Location: success.php");
        exit();
    } else {
        // Redirect to failure page
        header("Location: failed.php");
        exit();
    }
    
    $sql->close();
}
$conn->close();

?>
