<?php
include_once 'config.php';
?>

<!DOCTYPE html>
<html>

<body>
    <a href="hello_world.html">Hello World!</a>
    <p>CD/CD Readyyyyyyyyyyyyyyyyyyyy YEaaaaaaaaaaa</p>
    <a href="formrTest.php">formrTest</a>

    <h1>Welcome to the Portfolio Creator</h1>
    <form method="post" action="/main/portfolio.php">

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

        <label for="phoneNum">Phone Number:</label><br>
        <input type="text" name="phoneNum">
        <br><br>

        <label for="AboutMe">About Me:</label><br>
        <textarea name="AboutMe" rows="5" cols="40"></textarea>

        <br><br>
        <button type="submit">Create Portfolio</button>
    </form>
</body>

</html>