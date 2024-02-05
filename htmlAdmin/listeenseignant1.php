<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Listes des comptes enseignants</title>
</head>
<?php
include("../Nav/navadmin.php");

 include("../database/database.php");
 global $db; 

// Récupérer la liste des enseignants de la base de données
$q = $db->prepare( "SELECT * FROM enseignant ORDER BY date DESC ");
$q->execute();

?>

<body class="bg-light">
    <div class="container">
        <div class="row" style="margin-top:80px">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-5 text-center">Listes des comptes enseignants</h2>
                        <div class="my-3 d-flex justify-content-center align-items-center"><a href="./signupprf.php" class=" btn btn-success" data-toggle="modal" data-target="#ajouterEnseignantModal">Ajouter un enseignant</a></div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                        <thead>
                            <tr class="bg-dark text-white">
                                <td> Nom </td>
                                <td> Prenom </td>
                                <td> Email</td>
                            </tr>
                            </thead>
                            <?php while ($row = $q->fetch()) { ?>
                                <tbody>
                                <tr>
                                    <td> <?php echo $row['nom']; ?> </td>
                                    <td><?php echo $row['prenom']; ?></td>
                                    <td><?php echo $row['emailens']; ?></td>
                                </tr>
                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>
</body>
</html>