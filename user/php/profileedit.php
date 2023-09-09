<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    session_start();
    require('../../php/connect.php');
    if (isset($_POST['edit'])) {
        $first_name = $_POST["fname"];
        $last_name = $_POST["lname"];
        $gender = $_POST["gender"];
        $dob = $_POST["dob"];
        $phone_number = $_POST["num"];
        $alt_phone_number = $_POST["num2"];
        $house = $_POST["house_name"];
        $city = $_POST["city_name"];
        $district = $_POST["district"];
        $pincode = $_POST["pincode"];
        $aadhar = $_POST["logaadhar"];

        $email = $_SESSION["email"];

        $sql = "UPDATE `register` SET `first_name`='$first_name',`last_name`='$last_name',`gender`='$gender',`dob`='$dob',`phone_no`='$phone_number',`alternate_phnum`='$alt_phone_number',`house_name`='$house',`city`='$city',`district`='$district',`pincode`='$pincode',`aadhar_num`='$aadhar'
         WHERE email='$email'";

        update($sql);
    ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Updation Successful!',
            }).then((result) => {
                window.location.replace('../profile.php');
            })
        </script>

    <?php
    }
    ?>
</body>

</html>