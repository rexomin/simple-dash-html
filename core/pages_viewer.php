<?php

include 'viewer_header.php';

if (empty($_GET['page']) || !file_exists("pages/" . $_GET['page'] . ".php")) {
    if (file_exists("pages/home.php")) {
        $_GET['page'] = "home";
    } else {
        echo "404 - Page not found ";
        exit();
    }
}

include('pages/header.php');
include 'pages/' . $_GET['page'] . '.php';
include('pages/footer.php');

include 'viewer_footer.php';
