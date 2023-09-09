<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    session_start();
    require("../../php/connect.php");
    if (isset($_POST['login'])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql = "select * from login where email='$email'";
        if (num($sql) != 0) {
            $res = sel($sql);
            $row = mysqli_fetch_assoc($res);
            if ($password == $row['password']) {
                $_SESSION['email'] = $email;
                $_SESSION['menu'] = 'dash';
                // user
                if ($row['user_type'] == 3) {
                    $sql = "select status from login where email='$email'";
                    $res = sel($sql);
                    $row = mysqli_fetch_assoc($res);
                    if ($row['status'] == 0) {
    ?>
                        <script>
                            Swal.fire({
                                icon: 'info',
                                title: 'Account under verification!',
                            }).then((result) => {
                                window.location.replace('../../');
                            });
                        </script>
                    <?php
                    } else {
                    ?>
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Welcome Back User!',
                            }).then((result) => {
                                window.location.replace('../../user/');
                            });
                        </script>
                    <?php
                    }
                }
                // volunteer
                else if ($row['user_type'] == 2) {
                    $sql = "select status from login where email='$email'";
                    $res = sel($sql);
                    $row = mysqli_fetch_assoc($res);
                    if ($row['status'] == 0) {
                    ?>
                        <script>
                            Swal.fire({
                                icon: 'info',
                                title: 'Account under verification!',
                            }).then((result) => {
                                window.location.replace('../../');
                            });
                        </script>
                    <?php
                    } else {
                    ?>
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Welcome Back Guide!',
                            }).then((result) => {
                                window.location.replace('../../volunteer/');
                            });
                        </script>
                    <?php
                    }
                }
                //admin
                else if ($row['user_type'] == 1) {
                    ?>
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Welcome Back Admin!',
                        }).then((result) => {
                            window.location.replace('../../admin/');
                        });
                    </script>
                <?php
                }
            } else {
                ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Incorrect credentials',
                    }).then((result) => {
                        window.location.replace('../../');
                    });
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Account doesn\'t exsist!',
                }).then((result) => {
                    window.location.replace('../../');
                });
            </script>
    <?php
        }
    }
    ?>
</body>

</html>