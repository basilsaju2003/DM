<?php
// Include the database connection file using require
require('../connect.php'); // Make sure this points to the correct location of your connect.php file

// Check if the HTTP request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $email = $_POST["logemail"];
    $password = $_POST["logpass"];
  
    // SQL query for inserting user data
    
   // INSERT INTO login (email, password, usertype, status)VALUES ('user@example.com', 'hashed_password', 'regular_user', 'active');
    // Insert user data using your database connection and query function
    if (insert_data($insert_query)) { // Change to the appropriate function
        echo "Customer data inserted successfully!";
    } else {
        echo "Failed to insert user data.";
    }
   // if (insert_data($insert_query)) { // Change to the appropriate function
       // echo "Customer data inserted successfully!";
    //} else {
       // echo "Failed to insert user data.";
   // }
}
?>