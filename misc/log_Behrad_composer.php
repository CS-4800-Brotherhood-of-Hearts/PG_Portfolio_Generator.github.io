<?php

require 'vendor/autoload.php'; // Include Composer's autoloader

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Create a new Monolog logger instance
$log = new Logger('my_logger');

// Add a log handler to write log messages to a file (e.g., 'app.log')
$log->pushHandler(new StreamHandler('app.log', Logger::INFO));

// Log a message
$log->info('This is an informational message.');
$log->error('An error occurred!');

echo 'Log messages have been written to app.log';
