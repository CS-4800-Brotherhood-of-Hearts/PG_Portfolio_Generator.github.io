<?php

use PHPUnit\Framework\TestCase;

class portfolio_phpUNIT extends TestCase
{
    public function testProfilePageWithFormData()
    {
        // Simulate form data
        $_POST["firstName"] = "TestName";
        $_POST["lastName"] = "TestLastName";
        $_POST["email"] = "dummy.@example.com";
        $_POST["AboutMe"] = "This is dummy's bio.";

        // Capture the output of the page
        ob_start();
        include "portfolio.php"; 
        $output = ob_get_clean();

        // Assert that the output contains expected information
        $this->assertStringContainsString("John Doe", $output);
        $this->assertStringContainsString("Email: john.doe@example.com", $output);
        $this->assertStringContainsString("This is John's bio.", $output);
    }

    public function testProfilePageWithoutFormData()
    {
        // Simulate no form data being submitted
        $_SERVER["REQUEST_METHOD"] = "GET";

        // Capture the output of the page
        ob_start();
        include "portfolio.php"; 
        $output = ob_get_clean();

        // Assert that the output contains the error message
        $this->assertStringContainsString("Error: No data submitted.", $output);
    }
}
