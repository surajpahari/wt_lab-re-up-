<!DOCTYPE html>
<html lang="en">
    <style type="text/css">
        .form{
            display:flex;
            justify-content:center;
            margin:auto;
            border:3px solid blue;
        }
        .block{
            border:3px solid;
        }
    </style>

    <body>
        <div class="form">
            <form action="display.php" method="post">
                    <div>
                        <h2>Personal Information</h2>
                        <div>
                            <label>First Name</label>
                            <input type="text" name="first_name">
                        </div>
                        <br>
                        <div>
                            <label>Last Name</label>
                            <input type="text" name="last_name">
                        </div>
                        <br>
                        <div>
                            <label>Date of Birth</label>
                            <input type="date" name="dob" r>
                        </div>
                        <br>
                        <div>
                            <label>Gender</label>
                           <select name="gender">
                           <option value="">Select Gender</option>
                           <option value="male">Male</option>
                           <option value="female">Female</option>
                           </select>
                        </div>
                    <br>
                    <div>
                        <h2>Account Information</h2>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email">
                        </div>
                        <br>
                        <div>
                            <label>Retype Email</label>
                            <input type="email" name="rep_email">
                        </div>
                        <br>
                        <div>
                            <label>Password</label>
                            <input type="password" name="password">
                        </div>
                        <br>
                        <div>
                            <label>Re-type Password</label>
                            <input type="password" name="rep_password">
                        </div>
                        <div>
                            <label>Secutity Question</label>
                            <select name="security_question">
                                <option value="">Select Question</option>
                                <option value="Q_1">Who is your childhood bestfriend?</option>
                                <option value="Q_2">What is your favourite city?</option>
                                <option value="Q_3">Who is your favourite person?</option>
                            </select>
                        </div>
                        <div>
                            <label>Secutity Answer</label>
                            <input type="text" name="security_answer">
                        </div>
                        <br>
                    </div>
                    <div>
                        <h2>Contact Information</h2>
                        <div>
                            <label>Address</label>
                            <input type="text" name="address">
                        </div>
                        <br>
                        <div>
                            <label>City</label>
                            <input type="text" name="city">
                        </div>
                        <br>
                        <div>
                            <label>State</label>
                           <select name="state">
                           <option value="">Select State</option>
                           <option value="pokhara">Gandaki</option>
                           <option value="lekhnath">Bagmati</option>
                           <option value="lekhnath">Bagmati</option>

                           </select>
                        </div>
                        <br>
                        <div>
                            <label>Zip Code</label>
                            <input type="text" name="zip_code">
                        </div>
                        <br>
                        <div>
                            <label>Phone Number</label>
                            <input type="number" name="phone">
                            <select name="phone_type">
                           <option value="mobile">Mobile</option>
                           <option value="telephone">Telephone</option>
                           </select>
                        </div>
                        <br>
                        <div>
                            <input type="submit" value="Save" name="submit">
                        </div>
                    </div>
            </form>
        </div>
    </body>
</html>


