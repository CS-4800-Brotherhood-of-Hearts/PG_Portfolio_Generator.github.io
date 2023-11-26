<?php
include_once 'config.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Quickly create a simple portfolio you can share with a link.">
  <meta name="keywords" content="portfolio, generator, portfolio generator, free, fast, student portfolio">
  <title>Generator</title>
  <link rel="stylesheet" type="text/css" href="main/index.css">
</head>

<body>
  <header>

    <nav class="navbar">
      <a href="index.php" class="nav-branding">PG</a>

      <ul class="nav-menu">

        <li class="nav-item">
          <a href="index.php" class="nav-link">Generator</a>
        </li>

        <li class="nav-item">
          <a href="main/about.html" class="nav-link">About</a>
        </li>

      </ul>

      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>

    </nav>

  </header>

  <div style="max-width:auto" id="outerStrip">

    <div style="max-width:800px" id="pageHeading">

      <h2>Portfolio Generator</h2>

    </div> <!-- end of pageHeading-->


    <div style="max-width:800px" id="formSection">

      <h2>Enter your details below:</h2><br>
      <form method="post" action="/main/portfolio.php" enctype="multipart/form-data">

        <label for="firstName">First Name:</label><br>
        <input type="text" name="firstName" style="width: 200px;" placeholder="Enter first name" required>
        <br><br>
        <label for="lastName">Last Name:</label><br>
        <input type="text" name="lastName" style="width: 200px;" placeholder="Enter last name" required>
        <br><br>

        <label for="cityZip">City, State & Zip Code:</label><br>
        <input type="text" name="cityZip" style="width: 200px;" placeholder="City, State XXXXX">
        <br><br>

        <label for="email">Email:</label><br>
        <input type="text" name="email" style="width: 200px;" placeholder="example@test.com">
        <br><br>

        <label for="phoneNum">Phone Number:</label><br>
        <input type="text" name="phoneNum" style="width: 200px;" placeholder="(XXX) XXX-XXX">
        <br><br>

        <label for="education">Education:</label><br>
        <textarea name="education" rows="5" cols="40" placeholder="Add your education background"></textarea>
        <br><br>

        <label for="projects">Projects:</label><br>
        <textarea name="projects" rows="5" cols="40" placeholder="Add the projects you've been invloved in"></textarea>
        <br><br>

        <label for="employmentExperience">Employment Experience:</label><br>
        <textarea name="employmentExperience" rows="5" cols="40" placeholder="Add your employment experience"></textarea>
        <br><br>

        <label for="skills">Summary of Qualifications and Skills:</label><br>
        <textarea name="skills" rows="5" cols="40" placeholder="Add a summary of your skills and qualifications"></textarea>
        <br><br>

        <label for="profilePic">Select image to upload:</label><br>
        <input type="file" name="fileToUpload" id="fileToUpload" value="main/uploads/defaultProfilePic.png">

        <br><br>
        <button class="button" type="submit">Create Portfolio</button>
      </form>

    </div> <!-- end of formSection-->

  </div> <!-- end of outerStrip-->

  <script src="main/script.js"></script>
</body>
</body>

</html>