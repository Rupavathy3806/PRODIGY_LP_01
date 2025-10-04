<?php
$conn = new mysqli("localhost", "root", "", "landing_page_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<h3 style='text-align:center; color:green;'>Thank you, $name! Your message has been saved successfully.</h3>";
        echo "<p style='text-align:center;'><a href='index.php'>Go Back</a></p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
