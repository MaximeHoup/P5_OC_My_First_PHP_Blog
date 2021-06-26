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
                <h2 class="page-section-heading text-center text-uppercase text-white pt-5">Liste des posts</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <?php
                require_once('../model/dbconnect.php');

                $reponse = $bdd->query('SELECT posts_id, title, leadparagraph, content, date_format(creationdate, \'Le %d/%m/%Y à %Hh%imin%ss\') AS creationdatefr FROM posts ORDER BY creationdate DESC');
                ?>

                
                <div class="row mt-5">
                    <?php while ($donnees = $reponse->fetch())
                    {
                    ?>
                    <div class="col-md-6 col-lg-3 mt-4">
                        <div class="card bg-secondary">
                        <img class="card-img-top" src="../assets/img/oc.jpg" alt="image du post">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo htmlspecialchars($donnees ['title']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($donnees ['leadparagraph']); ?></p>
                            <a href="post.php?post=<?php echo $donnees['posts_id'] ?>" class="card-link">LIRE</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?php echo $donnees ['creationdatefr']; ?></small>
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
