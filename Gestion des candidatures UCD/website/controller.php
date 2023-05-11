<?php
include("./config.php");


// Pour la connexion de l'administrateur au dashboard
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    try {
        function validation($input)
        {
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input);
            return $input;
        }
        $username = validation($_POST['username']);
        $password = validation($_POST['password']);

        $result = mysqli_query($conn, "SELECT * FROM user where username='$username' and password='$password'");
        $row = mysqli_fetch_array($result);
        if (is_array($row)) {
            $_SESSION['id'] = $row['id_user'];
            $_SESSION['username'] = $row['username'];
        }

        if (isset($_SESSION['id'])) {
            header('location:templates/admin.php');
        } else {

            header('location:templates/login.php');
        }
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }
}


// Pour ajouter un offer par l'admin
if (isset($_POST['add'])) {
    try {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        $picture = $_FILES['picture']['name'];
        $result = mysqli_query($conn, "Insert into offer (title,description,date,picture) values ('$title','$description','$date','$picture')");
        if (!$result) die(mysqli_error($conn));
        header('location:templates/admin.php');
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }
}


// Pour modifier une offre par l'admin
if (isset($_POST['update'])) {
    try {
        $newid = $_POST['id'];
        $newTitle = $_POST['title'];
        $newDescription = $_POST['description'];
        $newDate = $_POST['date'];
        $newPicture = $_FILES['picture']['name'];

        $update = mysqli_query($conn, "update offer set title='$newTitle',description='$newDescription',date='$newDate',picture='$newPicture' where id_offer = '$newid'");
        if (!$update) die(mysqli_error($conn));
        header('location:templates/admin.php');
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }
}


// Pour supprimer une offre par l'admin
if (isset($_GET['delete'])) {
    try {
        $id = $_GET['delete'];
        $delete = mysqli_query($conn, "Delete from offer where id_offer = $id");
        if (!$delete) die(mysqli_error($conn));
        header('location:templates/admin.php');
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }
}


// Pour supprimer une candidature par l'admin
if (isset($_GET['deleteCandidat'])) {
    try {
        $idCandidat = $_GET['deleteCandidat'];
        $delete = mysqli_query($conn, "Delete from candidat where id_candidat = $idCandidat");
        if (!$delete) die(mysqli_error($conn));
        header('location:templates/admin.php');
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }
}


// pour la deconnexion de l'admin
if (isset($_POST['logout'])) {
    try {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('location:templates/login.php');
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }
}


// Pour la postulation d'une offre par un candidat 
if (isset($_POST['postuler'])) {
    try {
        $idOffer = $_POST['id'];
        $nom = $_POST['nomComplet'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $lettre = $_FILES['lettre']['name'];
        $cv = $_FILES['cv']['name'];
        $file_tmp1 = $_FILES['lettre']['tmp_name'];
        $file_tmp2 = $_FILES['cv']['tmp_name'];

        move_uploaded_file($file_tmp1, "./static/pdf/" . $lettre);
        move_uploaded_file($file_tmp2, "./static/pdf/" . $cv);


        $result = mysqli_query($conn, "Insert into candidat (nomComplet,email,telephone,lettre,cv,id_offer) values ('$nom','$email','$telephone','$lettre','$cv','$idOffer')");
        if (!$result) {
            die(mysqli_error($conn));
        }
        header("Location:$_SERVER[HTTP_REFERER]");
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }
}
