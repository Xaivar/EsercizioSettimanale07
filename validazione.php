<?php 

    require_once('config.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $titolo = trim(htmlspecialchars($_REQUEST['titolo'])) ? trim(htmlspecialchars($_REQUEST['titolo'])) : null;
        $autore = trim(htmlspecialchars($_REQUEST['autore'])) ? trim(htmlspecialchars($_REQUEST['autore'])) : null;
        $anno_pubblicazione = trim(htmlspecialchars($_REQUEST['anno_pubblicazione'])) ? trim(htmlspecialchars($_REQUEST['anno_pubblicazione'])) : null;
        $genere = trim(htmlspecialchars($_REQUEST['genere']))? trim(htmlspecialchars($_REQUEST['genere'])) : null;

    }

?>