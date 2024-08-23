<?php

// Fetch the current URI
$uri = $_SERVER['REQUEST_URI'];

// Trim any leading or trailing slashes
$uri = trim($uri, '/');

// If the URI contains query strings, remove them
$uri = parse_url($uri, PHP_URL_PATH);

// Define your custom routes
switch ($uri) {
    case 'goldfern':
        // Example: Load home page
        include 'app/views/home.php';
        break;
    
    case 'about':
        // Example: Load about page
        include 'app/views/about.php';
        break;
    
    case 'goldfern/contact':
        // Example: Load contact page
        include 'app/views/contact.php';
        break;
    

        case 'goldfern/properties':
            // Example: Load contact page
            include 'app/views/properties.php';
            break;

            case 'goldfern/visit':
                // Example: Load contact page
                include 'app/views/visit.php';
                break;

            case 'goldferncontact':
                // Example: Load contact page
                include 'app/views/contact.php';
                break;
    default:
        // Example: Load 404 error page for undefined routes
        include 'app/views/404.php';
        break;
}

?>