<?php
// Check if both first name and last name are provided
if (isset($_GET['firstName']) && isset($_GET['lastName'])) {
    // Get user's first and last name from the URL parameters
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];

    // Create a unique HTML file name based on the user's name
    $fileName = strtolower($firstName . '_' . $lastName . '_portfolio.html');

    // Create or overwrite the user's portfolio HTML file
    $fileContent = <<<EOD
    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>My Portfolio</h1>
        <div id="userName">Name: $firstName $lastName</div>
        <hr>
        <h2>About Me</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Nullam eget lorem augue. In feugiat metus non ex laoreet,
            ac bibendum libero bibendum. Sed id dolor in justo cursus
            venenatis eget sit amet risus.
        </p>
    </body>
    </html>
    EOD;

    // Write the HTML content to the user's portfolio file
    file_put_contents($fileName, $fileContent);

    // Redirect the user to their portfolio page
    header("Location: $fileName");
} else {
    // Redirect the user back to the index page if the first name or last name is missing
    header("Location: index.php");
}
?>
