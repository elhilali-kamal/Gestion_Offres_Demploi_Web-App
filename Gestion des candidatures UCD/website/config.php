<?php 

    define('SERVER', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB', 'university');
    $conn = mysqli_connect(SERVER, USER, PASSWORD, DB);
    if (!$conn) die('Echec de connexion au serveur');


