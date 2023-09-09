<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    require('../../php/connect.php');
    if (isset($_POST['reg'])) {
        $first_name = $_POST["fname"];
        $last_name = $_POST["lname"];
        $gender=$_POST["gender"];
        $dob = $_POST["dob"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $phone_number = $_POST["num"];
        $aadhar = $_POST["logaadhar"];

        $sql = "select * from login where email='$email'";
        if (num($sql) == 0) {
            $sql = " INSERT INTO `register`(`first_name`, `last_name`, `gender`, `dob`, `email`, `phone_no`, `aadhar_num`)
                 VALUES ('$first_name','$last_name','$gender','$dob','$email','$phone_number','$aadhar')";
            insert($sql);
            $sql2 = "INSERT INTO `login`(`email`, `password`, `status`, `usertype`) VALUES ('$email','$password','1','3')";
            insert($sql2);
    ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Registration Success!',
                }).then((result) => {
                    window.location.replace('../../');
                })
            </script>
        <?php
        } else {
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Account already existing!',
                }).then((result) => {
                    window.location.replace('../../');
                })
            </script>
    <?php

        }
    }
    ?>
</body>

</html>