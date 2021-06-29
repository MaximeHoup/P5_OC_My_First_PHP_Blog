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
                <h2 class="page-section-heading text-center text-uppercase text-white pt-5">Commentaires en attente - Administration</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <h4 class="text-center pt-2">Toute suppression est irréversible. La perte des données sera définitive.</h4>

                <?php
                require_once('../model/dbconnect.php');

                $reponse = $bdd->query('SELECT *, date_format(commentdate, \'Le %d/%m/%Y à %Hh%imin%ss\') AS commentdatefr FROM comments INNER JOIN posts ON comments.posts_id = posts.posts_id WHERE commentaccepted = "0"');
                
                ?>

                
                <div class="row mt-5">
                    <?php while ($donnees = $reponse->fetch())
                    {
                    ?>
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="card bg-secondary">
                        <img class="card-img-top" src="../assets/img/oc.jpg" alt="image du post">
                        <div class="card-body">
                            <h5 class="card-title text-center text-uppercase"><?php echo $donnees ['title']; ?></h5>
                            <p class="card-text mt-5"><?php echo htmlspecialchars($donnees ['content']); ?></p>
                            <p class="mt-5"><small class="text-muted"><?php echo $donnees ['commentdatefr']; ?></small></p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="../model/admincomment.php?comment=<?php echo $donnees['comments_id'] ?>" class="btn btn-outline-dark bg-primary mx-2">ACCEPTER</a>
                            <a href="../model/deletecomment.php?comment=<?php echo $donnees['comments_id'] ?>" class="btn btn-outline-dark bg-danger mx-2">SUPPRIMER</a>
                        </div>
                    </div>
                </div>
                <?php
                }
                $reponse->closeCursor();
                ?>
                
            </div>
        </section>
        <?php include("footermenu.php"); ?>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>

    </body>
</html>
