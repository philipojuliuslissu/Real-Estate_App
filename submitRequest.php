
<?php
session_start();
include("config.php");

// Retrieve form values
$fullName = $_POST['full_name'];
$phoneNumber = $_POST['phone_number'];
$rmessage = $_POST['rmessage'];
$title = $_POST['title'];

// Insert values into the database
$query = "INSERT INTO request(fullname, phonenumber, rmessage, title)  VALUES ('$fullName', '$phoneNumber', '$rmessage','$title')";
$result = mysqli_query($con, $query);

if ($result) {
    // Redirect to a success page or display a success message
    header("Location: success.php");
    exit();
} else {
    // Redirect to an error page or display an error message
    header("Location: error.php");
    exit();
}
?>