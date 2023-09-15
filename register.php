<?php include "header.php" ?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style2.css">

</head>

<body>
    <br>
    <center>
    <div class="wrapper">
        <h2>Registration</h2>
        <form action="login.php" align="center">
        <table>
            <div class="input-box">
                <input type="text" placeholder="First Name" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Last Name" required>
            </div>
            <div class="input-box">
                <input type="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="phone" placeholder="Phone Number" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Address Line 1" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Address Line 2" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Create password" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm password" required>
            </div>
            <div class="policy">
                <input type="checkbox">
                <h3><br>I accept all terms & condition</h3>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Register Now">
            </div>
            <div class="text">
                <h3>Already have an account? <a href="login.php">Login now</a></h3>
            </div>
        </table>
        </form>
    </div>
</center>
<br>
</body>
<?php include "footer.php"?>
</html>