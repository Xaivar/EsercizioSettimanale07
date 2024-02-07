<?php

require_once "config.php";

function AllUsers($mysqli){
    $libri = [];
    $sql = "SELECT * FROM libri;";
    $res = $mysqli->query($sql);
    if ($res) {
        while ($row = $res->fetch_assoc()) {
            $libri[] = $row;
        }
    }
return $libri;
}


    $libri = [
        "titolo" => isset($_POST['titolo']) ? $_POST['titolo'] : '',
        "autore" => isset($_POST['autore']) ? $_POST['autore'] : '',
        "anno_pubblicazione" => isset($_POST['anno']) ? $_POST['anno'] : '',
        "genere" => isset($_POST['genere']) ? $_POST['genere'] : '',
        "id" => isset($_REQUEST['id']) ? $_POST['id'] : ''
    ];

 function AddUsers($mysqli, $libri){
    $titolo = $libri['titolo'];
    $autore = $libri['autore'];
    $anno_pubblicazione = $libri['anno_pubblicazione'];
    $genere = $libri['genere'];

    $sql = "INSERT INTO libri (titolo, autore, anno_pubblicazione, genere) 
                VALUES ('$titolo', '$autore', '$anno_pubblicazione', '$genere')";
    if (!$mysqli->query($sql)) {
        echo ($mysqli->error);
    } else {
        header('Location: index.php');
    }
}

function removeBook($mysqli, $id)
{
    if (!$mysqli->query('DELETE FROM libri WHERE id = ' . $id)) {
        echo ($mysqli->connect_error);
    } else {
        echo 'Record Eliminato con Successo!';
    }
}

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    AddUsers($mysqli, $libri); } 

    else if(isset($_REQUEST['action']) && $_REQUEST['action'] === 'remove') {
        removeBook($mysqli, $_REQUEST['id']);
        exit(header('Location: index.php'));
    }

    function updateBook($mysqli, $id, $titolo, $autore, $anno_pubblicazione, $genere)
{
    $sql = "UPDATE libri SET 
                        titolo = '" . $titolo . "', 
                        autore = '" . $autore . "',
                        anno_pubblicazione = '" . $anno_pubblicazione . "',
                        genere = '" . $genere . "'
                        WHERE id = " . $id;
    if (!$mysqli->query($sql)) {
        echo ($mysqli->connect_error);
    } else {
        echo 'Libro modificato con successo!';
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action']) && $_POST['action'] === 'update') {
        updateBook($mysqli, $_POST['id'], $_POST['titoloUp'], $_POST['autoreUp'], $_POST['annoUp'], $_POST['genereUp']);
        exit(header('Location: index.php'));
    } else {
        AddUsers($mysqli, $book);
    }

} else if (isset($_REQUEST['action']) && $_REQUEST['action'] === 'remove') {
    removeBook($mysqli, $_REQUEST['id']);
    exit(header('Location: index.php'));
}
?>