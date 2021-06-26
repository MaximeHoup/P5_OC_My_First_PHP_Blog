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
                <h2 class="page-section-heading text-center text-uppercase text-white pt-5">Espace d'administration</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light pb-5">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="text-center mt-5">
                    <div class="row">
                        <div class="col-lg-4 ms-auto mx-4 pt-5 pb-5 border bg-secondary">
                            <h2 class="text-uppercase pb-3">Gestion des posts</h2>
                            <p class="lead pt-2"><br/>En accédant à la gestion des posts, vous pourrez créer, modifier ou supprimer des posts.</p>
                            <p class="lead"><br/>Les posts sont visibles par tous les visiteurs.</p>
                            <a class="btn btn-xl btn-outline-light bg-success mx-4 mt-5" href="adminpost.php"><i class="fa fa-cog fa-spin fa-fw"></i> Gérer les posts</a>
                        </div>
                        <div class="col-lg-4 me-auto mx-4 pt-5 pb-5 border bg-secondary">
                            <h2 class="text-uppercase pb-3">Gestion des commentaires</h2>
                            <p class="lead">En accédant à la gestion des commentaires, vous pourrez valider les commentaires postés par les visiteurs.</p>
                            <p class="lead">Une fois acceptés, les commentaires apparaissent sous les posts associés.</p>
                            <a class="btn btn-xl btn-outline-light bg-success mx-4 mt-3" href="admincomment.php"><i class="fa fa-check-square"></i> Gérer les commentaires</a>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 mx-4 mt-5 pt-5 pb-5 border bg-secondary">
                            <h2 class="text-uppercase pb-3">Gestion des utilisateurs</h2>
                            <p class="lead">En accédant à la gestion des utilisateurs, vous pourrez accepter des utilisateurs en tant qu'administrateur.</p>
                            <p class="lead">Attention ! Une fois acceptés, les utilisateurs pourront créer, modifier, supprimer du contenu.</p>
                            <a class="btn btn-xl btn-outline-light bg-success mx-4 mt-3" href="adminusers.php"><i class="fa fa-users"></i> Gérer les utilisateurs</a>
                        </div>
                    </div>

                </div>
            </div>
</section>
        <?php include("footermenu.php"); ?>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>

    </body>
</html>
