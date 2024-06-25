<!DOCTYPE html>
<html>
<head>
    <title>Registration Details</title>
</head>
<body>

    <h2>Registration Details</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>General Information</h3>";
        echo "<p><strong>First Name:</strong> " . $_POST['fname'] . "</p>";
        echo "<p><strong>Last Name:</strong> " . $_POST['lname'] . "</p>";
        echo "<p><strong>Gender:</strong> " . $_POST['gender'] . "</p>";
        echo "<p><strong>Father's Name:</strong> " . $_POST['faname'] . "</p>";
        echo "<p><strong>Mother's Name:</strong> " . $_POST['mname'] . "</p>";
        echo "<p><strong>Blood Group:</strong> " . $_POST['bg'] . "</p>";
        echo "<p><strong>Religion:</strong> " . $_POST['religion'] . "</p>";

        echo "<h3>Contact Information</h3>";
        echo "<p><strong>Email:</strong> " . $_POST['email'] . "</p>";
        echo "<p><strong>Phone/Mobile:</strong> " . $_POST['pnum'] . "</p>";
        echo "<p><strong>Website:</strong> " . $_POST['website'] . "</p>";
        echo "<p><strong>Present Address:</strong> " . $_POST['address'] . "</p>";

        echo "<h3>Account Information</h3>";
        echo "<p><strong>Username:</strong> " . $_POST['uname'] . "</p>";
        echo "<p><strong>Password:</strong> " . $_POST['password'] . "</p>";
        echo "<p><strong>Confirm Password:</strong> " . $_POST['cpassword'] . "</p>";
    }
    ?>

</body>
</html>
