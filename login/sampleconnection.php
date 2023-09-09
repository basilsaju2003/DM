<?php
// Include the database connection file using require
require('../connect.php'); // Make sure this points to the correct location of your connect.php file

// Check if the HTTP request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"];
    $dob=$_POST["dob"];
    $email = $_POST["logemail"];
    $password = $_POST["logpass"];
    $phone_number = $_POST["num"];
    $alt_phone_number = $_POST["num2"];
    $house_name = $_POST["loghname"];
    $city_name = $_POST["logcity"];
    $district = $_POST["logdist"];
    $pincode = $_POST["logpin"];
    $aadhar=$_POST["logaadhar"];

    // SQL query for inserting user data
    $insert_query = "INSERT INTO `register`(`first_name`, `last_name`, `dob`, `email`, `phone_no`, `alternate_phnum`, `house_name`, `city`, `district`, `pincode`, `aadhar_num`) 
    VALUES ('$first_name','$last_name','$dob','$email','$phone_number','$alt_phone_number','$house_name','$city_name','$district','$pincode','$aadhar')"; 

    // Insert user data using your database connection and query function
    if (insert_data($insert_query)) { // Change to the appropriate function
        echo "registered data inserted successfully!";
    } else {
        echo "Failed to insert customer data.";
    }
}
?>
    
