<?php

$userName = ''; // Insert user name here for proper path loading

require "C:\Users\\$userName\Documents\GitHub\PG_Portfolio_Generator.github.io\\vendor/autoload.php";
require_once "C:\Users\\$userName\Documents\GitHub\PG_Portfolio_Generator.github.io/generate_portfolio.php";

use PHPUnit\Framework\TestCase;

class generate_portfolio_Test extends TestCase
{
    public function testCreatePortfolio()
    {
        // Prepare a fake $_GET request
        $_GET['firstName'] = 'John';
        $_GET['lastName'] = 'Doe';

        // Capture output (HTML) and headers
        ob_start();
        ob_implicit_flush(false);

        $this->expectOutputString(''); // Expecting no direct output

        // Call the code
        include 'C:\Users\Arabo\Documents\GitHub\PG_Portfolio_Generator.github.io/generate_portfolio.php';

        // Get the captured output
        $output = ob_get_clean();

        // Check if the output is valid HTML
        $dom = new DOMDocument;
        $dom->loadHTML($output);

        // Test if there is an h1 element with text "My Portfolio"
        $this->assertEquals('My Portfolio', $dom->getElementsByTagName('h1')[0]->textContent);

        // Test if there is an element with id "userName" containing the provided name
        $this->assertEquals('Name: John Doe', $dom->getElementById('userName')->textContent);

        // Test if there is an h2 element with text "About Me"
        $this->assertEquals('About Me', $dom->getElementsByTagName('h2')[0]->textContent);

        // Test if the file has been created
        $this->assertTrue(file_exists('john_doe_portfolio.html'));

        // Clean up after the test
        unlink('john_doe_portfolio.html');
    }

    public function testRedirectWithoutFirstName()
    {
        // Prepare a fake $_GET request without first name
        $_GET['lastName'] = 'Doe';

        // Capture output (HTML) and headers
        ob_start();
        ob_implicit_flush(false);

        $this->expectOutputString(''); // Expecting no direct output

        // Call the code
        include 'C:\Users\Arabo\Documents\GitHub\PG_Portfolio_Generator.github.io/generate_portfolio.php';

        // Get the captured output
        $output = ob_get_clean();

        // Check if it redirects to index.php
        $this->assertStringContainsString('Location: index.php', $this->getHeader($output));
    }

    public function testRedirectWithoutLastName()
    {
        // Prepare a fake $_GET request without last name
        $_GET['firstName'] = 'John';

        // Capture output (HTML) and headers
        ob_start();
        ob_implicit_flush(false);

        $this->expectOutputString(''); // Expecting no direct output

        // Call the code
        include 'C:\Users\Arabo\Documents\GitHub\PG_Portfolio_Generator.github.io/generate_portfolio.php';

        // Get the captured output
        $output = ob_get_clean();

        // Check if it redirects to index.php
        $this->assertStringContainsString('Location: index.php', $this->getHeader($output));
    }

    // Helper function to extract headers from the output
    private function getHeader($output)
    {
        $headers = [];
        $lines = explode("\n", $output);
        foreach ($lines as $line) {
            if (strpos($line, 'Location:') !== false) {
                $headers[] = trim($line);
            }
        }
        return end($headers); // Return the last header
    }
}
