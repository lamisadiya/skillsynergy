<?php // php code for inserting data into the database //

include 'db.php'; //connection to database

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // if connection does not build then show this message
}

$name = $_POST['name'];             //
$mobile = $_POST['mobile'];         // storing values from index.html to these variables 
$subject = $_POST['subject'];       //
$message = $_POST['message'];       //

$sql = "INSERT INTO contact (name, num, subject, message) VALUES ('$name', '$mobile', '$subject', '$message')";     // sql querry to insert above variable values into the table

if ($conn->query($sql) === TRUE) {
    return true;      // if message stored successfully then show this
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// $stmt->close();
$conn->close();     // closing hte database connection
header('location: contact_page.php');
exit;
