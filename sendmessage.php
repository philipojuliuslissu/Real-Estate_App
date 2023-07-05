<?php
session_start();
include("config.php");

//sending Message
$error = "";
$msg = "";
if (isset($_POST['send'])) {

	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$phoneNo = $_POST['phoneNo'];
    $message = $_POST['message'];
    if (!empty($fullname) && !empty($email) && !empty($phoneNo) && !empty($message) && !empty($message)) {

        $sql = "INSERT INTO messages (fullname, email, phonenumber, message) VALUES('$fullname','$email',''$phoneNo,'$message')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $msg = "<p class='alert alert-success'>Message Sent Successfully</p>";

        } else {
            $error = "<p class='alert alert-warning'>* There are Some Errors Occured!! Please Retry</p>";
        }
    } else {
        $error = "<p class='alert alert-warning'>* There are Some Errors Occured!! Please Retry</p>";
    }
}
?>
