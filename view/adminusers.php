<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include ("head.php"); ?>
    </head>

    <body>
        <?php include("navbar.php"); ?>

        <section class="page-section bg-primary text-white mb-0 mt-5" id="listpost">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white pt-5">Utilisateurs - Administration</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <?php
                require_once('../model/dbconnect.php');

                $reponse = $bdd->query('SELECT nickname, users_id FROM users WHERE admin = "0"');
                
                ?>

                
                <div class="row mt-5">
                    <?php while ($donnees = $reponse->fetch())
                    {
                    ?>
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="card bg-secondary">
                        <div class="card-body">
                            <h5 class="card-title text-center text-uppercase"><?php echo htmlspecialchars($donnees ['nickname']); ?></h5>
                            <p class="mt-5"><small class="text-danger">Attention ! Une fois acceptés, les utilisateurs pourront créer, modifier, supprimer du contenu.</small></p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="../model/adminusers.php?id=<?php echo $donnees['users_id'] ?>" class="btn btn-outline-dark bg-primary mx-2">Promouvoir administrateur</a>
                        </div>
                    </div>
                </div>
                <?php
                }
                
        $reponse->closeCursor();
        ?>
</section>
        <?php include("footermenu.php"); ?>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>

    </body>
</html>
