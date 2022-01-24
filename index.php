<?php
$metaTitle = 'Accueil';
$metaDescription = 'Ceci est une super description';
include 'header.php';

//include './pages/resume.php';
if (isset($_GET['page'])) {
    $page=$_GET['page'];
    if ($page == 'hobby') {
      include 'pages/hobby.php';
    } elseif ($page == 'contact') {
        include 'pages/contact.php';
    } else {
        include 'pages/resume.php';
    }
}

include 'footer.php';
