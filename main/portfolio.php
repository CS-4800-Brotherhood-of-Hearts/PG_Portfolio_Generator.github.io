<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php
    $target_dir = "uploads/";
    $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "/var/www/html/main/uploads/".$target_file);

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
        <?php echo "<img src='" . $target_file . "' alt='Uploaded Image'>";
        echo "<b>Error : " . $_FILES["fileToUpload"]["error"]; ?>
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