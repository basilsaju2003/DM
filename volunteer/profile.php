<?php
require('header.php');

$sql = "select * from register where email='$email'";
$res = sel($sql);
$row = mysqli_fetch_assoc($res);
?>

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="typo-agile">
                    <h2 class="w3ls_head">Profile</h2>

                </div>
            </div>
            <div class="col-md-6">
                <section class="panel">
                    <header class="panel-heading">
                        Basic Forms
                    </header>
                    <div class="panel-body">
                        <div class="position-center" style="width: 75%;">
                            <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" disabled value="<?php echo $row['email']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="first_name" placeholder="first name" value="<?php echo $row['first_name']; ?>" </div>
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" placeholder="last name" value="<?php echo $row['last_name']; ?>" </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Gender</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Gender" id="genderMale" value="Male" required="">
                                                <label class="form-check-label" for="genderMale">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Gender" id="genderFemale" value="Female" required="">
                                                <label class="form-check-label" for="genderFemale">
                                                    Female
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Gender" id="genderOther" value="Other" required="">
                                                <label class="form-check-label" for="genderOther">
                                                    Other
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="dob" class="col-form-label">Date of Birth</label>
                                            <input type="date" class="form-control" name="DOB" id="dob" required="" value="<?php echo $row['date_of_birth']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-phone" class="col-form-label">Phone Number</label>
                                            <input type="tel" class="form-control" placeholder="1234567890" name="PhoneNumber" id="recipient-phone" pattern="[0-9]{10}" required="" value="<?php echo $row['phone_no']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">House Name</label>
                                            <input type="text" class="form-control" placeholder="House Name" name="houseName" id="recipient-rname" required="" value="<?php echo $row['house_name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">District</label>
                                            <select class="form-control" placeholder="District" name="District" id="dist" required="">
                                                <option value="Kasargod">Kasargod</option>
                                                <option value="Kannur">Kannur</option>
                                                <option value="waynad">Wayanad</option>
                                                <option value="kozhikode">Kozhikode</option>
                                                <option value="malappuram">Malappuram</option>
                                                <option value="palakkad">Palakkad</option>
                                                <option value="Thrissur">Thrissur</option>
                                                <option value="Eranakulam">Eranakulam</option>
                                                <option value="Idukki">Idukki</option>
                                                <option value="Kottayam">Kottayam</option>
                                                <option value="Alappuzha">Alappuzha</option>
                                                <option value="Pathanamthitta">Pathanamthitta</option>
                                                <option value="Kollam">Kollam</option>
                                                <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">City</label>
                                            <input type="text" class="form-control" placeholder="City Name" name="cityName" id="recipient-rname" required="" value="<?php echo $row['city']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Pin Code</label>
                                            <input type="tel" class="form-control" placeholder="Pin Code" name="pinCode" id="recipient-rname" required="" value="<?php echo $row['pincode']; ?>">
                                        </div>

                                        <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                        </div>

                    </div>
                </section>
            </div>
        </div>

    </section>
    <script>
        var dropdown = document.getElementById("dist");

        for (var i = 0; i < dropdown.options.length; i++) {
            if (dropdown.options[i].value === "<?php echo $row['district']; ?>") {
                dropdown.selectedIndex = i;
                break;
            }
        }

        var radioButtons = document.getElementsByName("Gender");

            for (var i = 0; i < radioButtons.length; i++) {
                if (radioButtons[i].value === "<?php echo $row['gender']; ?>") {
                    radioButtons[i].checked = true;
                    break;
                }
            }
    </script>

    <?php
    require('footer.php');
    ?>