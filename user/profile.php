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
                    <h2 class="w3ls_head"><?php echo $row['first_name']." ".$row['last_name']; ?></h2>
                    <div class="bs-example">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <h4 id="h4.-bootstrap-heading"><?php echo $row['email']; ?></h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 id="h4.-bootstrap-heading"><?php echo $row['gender']; ?></h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 id="h4.-bootstrap-heading"><?php echo $row['dob']; ?></h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 id="h4.-bootstrap-heading"><?php echo $row['phone_no']; ?></h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 id="h4.-bootstrap-heading"><?php echo $row['alternate_phnum']; ?></h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 id="h4.-bootstrap-heading"><?php echo $row['house_name']; ?></h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 id="h4.-bootstrap-heading"><?php echo $row['city']; ?></h4>
                                    </td>
                                </tr><tr>
                                    <td>
                                        <h4 id="h4.-bootstrap-heading"><?php echo $row['district']; ?></h4>
                                    </td>
                                </tr><tr>
                                    <td>
                                        <h4 id="h4.-bootstrap-heading"><?php echo $row['pincode']; ?></h4>
                                    </td>
                                </tr>
                                <td>
                                        <h4 id="h4.-bootstrap-heading"><?php echo $row['aadhar_num']; ?></h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <section class="panel">
                    <header class="panel-heading">
                        Basic Forms
                    </header>
                    <div class="panel-body">
                        <div class="position-center" style="width: 75%;">
                            <form role="form" method="POST" action="php/profileedit.php">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" disabled value="<?php echo $row['email']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="first name" required="", value="<?php echo $row['first_name']; ?>"> </div>
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" id="lname" name="lname" placeholder="last name" required="" value="<?php echo $row['last_name']; ?>"> </div>
                                       <div class="form-group">
                                            <label class="col-form-label">Gender</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Male" required="">
                                                <label class="form-check-label" for="genderMale">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female" required="">
                                                <label class="form-check-label" for="genderFemale">
                                                    Female
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="genderOther" value="Other" required="">
                                                <label class="form-check-label" for="genderOther">
                                                    Other
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="dob" class="col-form-label">Date of Birth</label>
                                            <input type="date" class="form-control" name="dob" id="dob" required="" value="<?php echo $row['dob']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-phone" class="col-form-label">Phone Number</label>
                                            <input type="tel" class="form-control" placeholder="1234567890" name="num" id="num" pattern="[0-9]{10}" required="" value="<?php echo $row['phone_no']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-phone" class="col-form-label"> Alternate Phone Number</label>
                                            <input type="tel" class="form-control" placeholder="1234567890" name="num2" id="num2" pattern="[0-9]{10}" required="" value="<?php echo $row['alternate_phnum']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">House Name</label>
                                            <input type="text" class="form-control" placeholder="House Name" name="house_name" id="recipient-rname" required="" value="<?php echo $row['house_name']; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">City</label>
                                            <input type="text" class="form-control" placeholder="City Name" name="city_name" id="recipient-rname" required="" value="<?php echo $row['city']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">District</label>
                                            <select class="form-control" placeholder="District" name="district" id="district" required="">
                                                <option disabled selected>   </option>
                                                <option value="Kasargod">Kasargod</option>
                                                <option value="Kannur">Kannur</option>
                                                <option value="waynad">Wayanad</option>
                                                <option value="kozhikode">Kozhikode</option>
                                                <option value="malappuram">Malappuram</option>
                                                <option value="palakkad">Palakkad</option>
                                                <option value="Thrissur">Thrissur</option>
                                                <option value="Eranakulam">Ernakulam</option>
                                                <option value="Idukki">Idukki</option>
                                                <option value="Kottayam">Kottayam</option>
                                                <option value="Alappuzha">Alappuzha</option>
                                                <option value="Pathanamthitta">Pathanamthitta</option>
                                                <option value="Kollam">Kollam</option>
                                                <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Pin Code</label>
                                            <input type="tel" class="form-control" placeholder="Pin Code" name="pincode" id="recipient-rname" required="" value="<?php echo $row['pincode']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Aadhar Number</label>
                                            <input type="tel" class="form-control" placeholder="Aadhar Number" name="logaadhar" id="recipient-rname" required="" value="<?php echo $row['aadhar_num']; ?>">
                                        </div>

                                        <button type="submit"  name="edit" class="btn btn-info">Submit</button>
                            </form>
                        </div>

                    </div>
                </section>
            </div>
        </div>

    </section>
    <script>
        var dropdown = document.getElementById("district");

        for (var i = 0; i < dropdown.options.length; i++) {
            if (dropdown.options[i].value === "<?php echo $row['district']; ?>") {
                dropdown.selectedIndex = i;
                break;
            }
        }

        var radioButtons = document.getElementsByName("gender");

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