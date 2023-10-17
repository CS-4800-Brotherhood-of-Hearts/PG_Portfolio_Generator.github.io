<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php
    // Check if form data has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve user's first and last name from the form
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $AboutMe = $_POST["AboutMe"];
        $phoneNum = $_POST["phoneNum"];
        // Display the user's name
        // echo "<div>Name: " . $firstName . " " . $lastName . "</div>";

    } else {
        // If no form data has been submitted, display an error message
        echo "<div>Error: No data submitted.</div>";
    }
    ?>

    <div class="profile-container">
        <img src="profilePicIcon.png" alt="Profile Picture">
        <h1> <?php echo  $firstName . " " . $lastName; ?> </h1>
        <p>Job Title</p>
        <p>Location</p>
        <p>Email: <?php echo " " . $email; ?></p>
        <p>Phone:<?php echo " " . $phoneNum; ?></p>
        <hr>
        <h2>About Me</h2>
        <p>
            <?php echo " " . $AboutMe; ?>
        </p>
    </div>

</body>

</html>