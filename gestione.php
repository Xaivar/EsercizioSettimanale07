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

$libro = [
    $titolo => $_POST['titolo'],
    $autore => $_POST['autore'],
    $anno => $_POST['anno'],
    $genere => $_POST['genere']
];
//  function AddUsers($mysqli, $libro){
//     $titolo = $libro['titolo'];
//     $autore = $libro['autore'];
//     $anno = $libro['anno'];
//     $genere = $libro['genere'];

//     $sql = 'INSERT INTO libri(titolo, autore, anno_pubblicazione, genere) VALUES ('.$titolo.', '.$autore.', '.$anno.', '.$genere.')';
//     if (!$mysqli->query($sql)) {
//         echo ($mysqli->connect_error);
//     } else {
//         echo 'Record aggiunto con successo!!!';
//     }
//     header('Location: index.php');
//  }
//  if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     AddUsers($mysqli, $book); }                     <-------- Da correggere 
?>