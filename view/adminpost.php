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
                <h2 class="page-section-heading text-center text-uppercase text-white pt-5">Liste des posts - Administration</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <h4 class="text-center pt-2">Toute suppression est irréversible. La perte des données sera définitive.</h4>


                <?php
                require_once('../model/dbconnect.php');

                $reponse = $bdd->query('SELECT posts_id, title, leadparagraph, content, date_format(modificationdate, \'Le %d/%m/%Y à %Hh%imin%ss\') AS modificationdatefr FROM posts ORDER BY modificationdate DESC');
                ?>

                
                <div class="row mt-5">
                    <?php while ($donnees = $reponse->fetch())
                    {
                    ?>
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="card bg-secondary">
                        <img class="card-img-top" src="../assets/img/oc.jpg" alt="image du post">
                        <div class="card-body">
                            <h5 class="card-title text-center text-uppercase"><?php echo htmlspecialchars($donnees ['title']); ?></h5>
                            <p class="card-text mt-5"><?php echo htmlspecialchars($donnees ['leadparagraph']); ?></p>
                            <p class="mt-5"><small class="text-muted"><?php echo $donnees ['modificationdatefr'], $donnees ['posts_id']; ?></small></p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="post.php?post=<?php echo $donnees['posts_id'] ?>" class="btn btn-outline-dark bg-primary mx-2 mb-1">LIRE</a>
                            <a href="editpost.php?post=<?php echo $donnees['posts_id'] ?>" class="btn btn-outline-dark bg-warning mx-2 mb-1">MODIFIER</a>
                            <a href="../model/deletepost.php?post=<?php echo $donnees['posts_id'] ?>" class="btn btn-outline-dark bg-danger mx-2 mb-1">SUPPRIMER</a>
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
