<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "CarRentalDB"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Debugging: Confirm connection success
echo "Database connected successfully.<br>";

// Retrieve form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$start_date = $_POST['start-date'] ?? '';
$end_date = $_POST['end-date'] ?? '';
$payment_method = $_POST['payment-method'] ?? '';
$card_number = $_POST['card-number'] ?? NULL;
$expiry_date = $_POST['expiry-date'] ?? NULL;
$cvv = $_POST['cvv'] ?? NULL;

// Debugging: Print received data
echo "Received Data:<br>";
echo "Name: $name<br>";
echo "Email: $email<br>";
echo "Phone: $phone<br>";
echo "Start Date: $start_date<br>";
echo "End Date: $end_date<br>";
echo "Payment Method: $payment_method<br>";

// SQL query to insert data
$sql = "INSERT INTO bookings (name, email, phone, start_date, end_date, payment_method, card_number, expiry_date, cvv) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error in preparing SQL statement: " . $conn->error);
}

$stmt->bind_param("sssssssss", $name, $email, $phone, $start_date, $end_date, $payment_method, $card_number, $expiry_date, $cvv);

if ($stmt->execute()) {
    echo "Booking successful!";
    header("Location: confirmation.html");
    exit();
} else {
    echo "Error in executing query: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
