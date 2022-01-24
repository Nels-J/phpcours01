<?php
// Récupérer le code actuel de réponse et définir un nouveau
http_response_code(404);
?>

<h2>Wrong way ! Page required does not exist. Http Error : <?= http_response_code();?> !</h2>