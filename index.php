<?php
$metaTitle = 'Accueil';
$metaDescription = 'Ceci est une super description';
include 'header.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if ($page == 'hobby') {
        include 'pages/hobby.php';
    } elseif ($page == 'contact') {
        include 'pages/contact.php';
    } elseif ($page == 'resume') {
        include 'pages/resume.php';
    } else {
        include 'pages/error.php';
    }
}

include 'footer.php';
