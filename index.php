<?php
include_once 'config.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  
      <h2>Enter your details below:</h2>
      <form method="post" action="/main/portfolio.php" enctype="multipart/form-data">
  
          <label for="firstName">First Name:</label>
          <input type="text" name="firstName" placeholder="Enter first name" required>
          <br><br>
          <label for="lastName">Last Name:</label>
          <input type="text" name="lastName" placeholder="Enter last name"required>
          <br><br>
  
          <label for="email">Email:</label><br>
          <input type="text" name="email" placeholder="example@test.com">
          <br><br>
  
          <label for="phoneNum">Phone Number:</label><br>
          <input type="text" name="phoneNum" placeholder="(XXX) XXX-XXX">
          <br><br>
  
          <label for="AboutMe">About Me:</label><br>
          <textarea name="AboutMe" rows="5" cols="40" placeholder="Add a brief description"></textarea>
          <br><br>
  
          <label for="profilePic">Select image to upload:</label><br>
          <input type="file" name="fileToUpload" id="fileToUpload">
  
          <br><br>
          <button class="button" type="submit">Create Portfolio</button>
      </form>
  
    </div> <!-- end of formSection-->
  
  </div> <!-- end of outerStrip-->
  
  
  <script src="main/script.js"></script>
  </body>
</body>

</html>