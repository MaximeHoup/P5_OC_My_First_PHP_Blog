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

                <?php
                require_once('../model/dbconnect.php');

                $reponse = $bdd->query('SELECT content, posts_id, comments_id, date_format(commentdate, \'Le %d/%m/%Y à %Hh%imin%ss\') AS commentdatefr FROM comments WHERE commentaccepted = "0"');
                
                ?>

                
                <div class="row mt-5">
                    <?php while ($donnees = $reponse->fetch())
                    {
                    ?>
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="card bg-secondary">
                        <img class="card-img-top" src="../oc.jpg" alt="image du post">
                        <div class="card-body">
                            <h5 class="card-title text-center text-uppercase"><?php echo $donnees ['posts_id']; ?></h5>
                            <p class="card-text mt-5"><?php echo htmlspecialchars($donnees ['content']); ?></p>
                            <p class="mt-5"><small class="text-muted"><?php echo $donnees ['commentdatefr']; ?></small></p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="post.php?post=<?php echo $donnees['posts_id'] ?>" class="btn btn-outline-dark bg-primary mx-2">LIRE</a>
                            <button type="button" class="btn btn-outline-dark bg-danger mx-2" data-bs-toggle="modal" data-bs-target="#deleteconf">SUPPRIMER</button>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
                <div class="modal fade" id="deleteconf" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="modal-body text-center pb-5">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <!-- Portfolio Modal - Title-->
                                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Confirmation de suppression</h2>
                                            <!-- Icon Divider-->
                                            <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                <div class="divider-custom-line"></div>
                                            </div>
                                            <p class="text-secondary mt-4">Êtes-vous sûr de vouloir supprimer ce post ?</p>
                                            <p class="text-secondary">Cette action est irréversible.</p>
                                            <p class="text-secondary mb-4">La perte des données sera définitive.</p>
                                            <a href="#" class="btn btn-outline-light bg-danger mx-2" data-bs-dismiss="modal"><i class="fas fa-times fa-fw mx-1"></i>Annuler</a>
                                            <a href="../model/deletecomment.php?comment=<?php echo $donnees['comments_id'] ?>" class="btn btn-outline-light bg-primary mx-2"><i class="fas fa-check fa-fw mx-1"></i>Supprimer</a>
                                                
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
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
