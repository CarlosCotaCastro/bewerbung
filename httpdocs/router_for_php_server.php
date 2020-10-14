<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|ttf|woff|woff2|css|js|mp4)$/', $_SERVER["REQUEST_URI"])) {
    return false; // Liefere die angefragte Ressource direkt aus
} else {
    include 'index.php';
}