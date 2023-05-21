<?php
/**
 * Your other code here...
 */

use Magento\Framework\Component\ComponentRegistrar;

// Load the autoload.php file
require_once '/var/www/html/vendor/autoload.php';

// Register the module
ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Magento_RequestAQuote',
    __DIR__
);

