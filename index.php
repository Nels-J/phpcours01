<?php
$metaTitle = 'Accueil';
$metaDescription = 'Ceci est une super description';
include 'header.php';

/* Sans filtrage le code était
    if (isset($_GET['page'])) {
    $page = $_GET['page'];
L'ajout du filtrage remplace les lignes précedentes pour mémo le var_name:'page' correspond à ce qui est attendu dans l'URI
*/

if ($page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS )) {
    if ($page == 'hobby') {
        include 'pages/hobby.php';
    } elseif ($page == 'contact') {
        include 'pages/contact.php';
    } elseif ($page == 'resume') {
        include 'pages/resume.php';
    } else {
        include 'pages/error.php';
    }
} else {
    include 'pages/resume.php';
}

include 'footer.php';
