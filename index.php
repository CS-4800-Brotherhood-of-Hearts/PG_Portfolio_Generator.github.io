
<!DOCTYPE html>
<html>


<head>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>
    <h1>Welcome to the Portfolio Creator</h1>
   <!--  <form method="get" action="generate_portfolio.php"> -->
    <form method="post" action="portfolio.php">
        
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" required>
        <br><br>
        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" required>
        <br><br>

        <!-- Email -->  
        <label for="email">Email:</label><br>
        <input type="text" name="email">
        <br><br>

        <label for="AboutMe">About Me:</label><br>
        <textarea name="AboutMe" rows="5" cols="40"></textarea>

        <br><br>
        <button type="submit">Create Portfolio</button>

    </form>
</body>

</html>




