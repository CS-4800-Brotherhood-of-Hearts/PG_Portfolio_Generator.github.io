<?php
ob_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $counterFile = "counter.txt";

    // Check if form data has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve user's first and last name from the form
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $cityZip = $_POST["cityZip"];
        $phoneNum = $_POST["phoneNum"];
        $email = $_POST["email"];
        $education = $_POST["education"];
        $projects = $_POST["projects"];
        $employmentExperience = $_POST["employmentExperience"];
        $skills = $_POST["skills"];
        $fileName = strtolower(str_replace(' ', '_', $firstName)) . "_portfolio.html";

        $count = (int) file_get_contents($counterFile);
        $count++;
        file_put_contents($counterFile, $count);
    } else {
        // If no form data has been submitted, display an error message
        echo "<div>Error: No data submitted.</div>";
    }
    ?>

    <!-- Upload user's picture -->
    <div class="profile-container">
        <?php if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $uploaded_image = basename($_FILES["fileToUpload"]["name"]);
            echo "<img src='" . $uploaded_image . "' alt='Uploaded Image'>";
        } else {
            echo "<img src='defaultProfilePic.png' alt='Default Image'>";
        } ?>
        <h1> <?php echo  $firstName . " " . $lastName; ?> </h1>
        <p><?php echo " " . $cityZip; ?></p>
        <p><?php echo " " . $phoneNum; ?></p>
        <p><?php echo " " . $email; ?></p>
        <hr>
        <h2>Education</h2>
        <p>
            <?php echo " " . $education; ?>
        </p>
        <hr>
        <h2>Projects</h2>
        <p>
            <?php echo " " . $projects; ?>
        </p>
        <hr>
        <h2>Employment Experience</h2>
        <p>
            <?php echo " " . $employmentExperience; ?>
        </p>
        <hr>
        <h2>Summary of Qualifications and Skills</h2>
        <p>
            <?php echo " " . $skills; ?>
        </p>
    </div>
</body>

</html>

<?php
$portfolioContent = ob_get_clean();
// Save the file
file_put_contents("uploads/" . $fileName, $portfolioContent);

echo "<script>window.open('uploads/$fileName', '_self');</script>";
?>