<?php

require_once 'config.php';
require_once 'gestione.php';

$utenti = AllUsers($mysqli);
// $agg_libri = AddUsers($mysqli, $titolo, $autore, $anno, $genere);
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria - Libri Per Tutti!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark text-white">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page"
                            href="registrazione.php">Registrazione</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Link</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <table class="table container mt-5 border">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Autore</th>
                <th scope="col">Anno</th>
                <th scope="col">Genere</th>
                <th scope="col">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Aggiungi Un Libro</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="gestione.php">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Titolo</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" name="titolo">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Autore</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="autore">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Anno</label>
                                            <input type="number" step="1" class="form-control" id="exampleInputPassword1" name="anno">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Genere</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="genere">
                                        </div>
                                        <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Chiudi</button>
                                    <button type="submit" class="btn btn-primary">Salva Cambiamenti</button>
                                </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </th>
            </tr>

        </thead> 
        <tbody class="table-group-divider">
        <?php
        foreach ($utenti as $key =>$utente) {
            echo '<tr>
                <th scope="row">'.$utente['id'].'</th>
                <td>'.$utente['titolo'].'</td>
                <td>'.$utente['autore'].'</td>
                <td>'.$utente['anno_pubblicazione'].'</td>
                <td>'.$utente['genere'].'</td>
                <th></th>
            </tr>';
        }
        ?>
       </tbody>
            
        
        
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>