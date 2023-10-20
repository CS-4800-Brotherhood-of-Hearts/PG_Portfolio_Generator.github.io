<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

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
        <?php if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $uploaded_image = basename($_FILES["fileToUpload"]["name"]);
            echo "<img src='" . $target_dir . $uploaded_image . "' alt='Uploaded Image'>";
        } else {
            echo "Sorry, there was an error uploading your file.";
        } ?>
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