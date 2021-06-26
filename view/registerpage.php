<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include ("head.php"); ?>
    </head>
    <style> form {text-align:center;} </style>

    <body>
        <?php include("navbar.php"); ?>

        <section class="page-section bg-primary text-white mb-0 mt-5" id="listpost">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-white">S'inscrire</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light mb-4">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <form action="../model/registerpage.php" method="post">
                    <div class="form-floating">
                        <input class="form-control" name="nickname" placeholder="Enter your content here..." />
                        <label for="content">Pseudo</label>
                    </div>
                    <div class="form-floating">
                        <input class="form-control" type="password" name="pass" placeholder="Enter your title..." />
                        <label for="title">Mot de passe</label>
                    </div>
                    <div class="form-floating">
                        <input class="form-control" type="email" name="email" placeholder="Enter your title..." />
                        <label for="title">Email</label>
                    </div>
                    <div class="text-center mt-4">
                    <button class="btn btn-primary bg-secondary btn-xl" type="submit">Envoyer</button>
                    </div>
                </form>
                <div class="mt-4">
                    <p>Déjà inscrit ? <a class= "text-secondary" href="loginpage.php">Connectez-vous ici.</a>
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
