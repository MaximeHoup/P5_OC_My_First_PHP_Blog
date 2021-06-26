<!DOCTYPE html>
<html lang="fr">
    <head>
       <?php include ("head.php"); ?>
    </head>
    <style> form {text-align:center;} </style>

    <body>
        <?php include("navbar.php");
        require_once('../model/dbconnect.php');
        $reponse = $bdd->prepare('SELECT posts_id, title, leadparagraph, content, users_id, nickname, date_format(modificationdate, \'%d/%m/%Y à %Hh%imin%ss\') AS modificationdatefr FROM posts WHERE posts_id = ?');
        $reponse->execute(array($_GET['post']));
        $donnees = $reponse->fetch();
        ?>

        <section class="page-section bg-primary text-white mb-0 mt-5" id="listpost">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-white">Modifier un post</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light mb-4">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <form action="../model/editpost.php?post=<?php echo $donnees['posts_id'] ?>" method="post">
                    <div class="form-floating">
                        <input class="form-control" type="text" name="nickname" placeholder="Enter your title..." value="<?php echo htmlspecialchars($donnees['nickname']) ?>" />
                        <label for="nickname">Pseudo</label>
                    </div>
                    <div class="form-floating">
                        <input class="form-control" type="text" name="title" placeholder="Enter your title..." value="<?php echo htmlspecialchars($donnees['title']) ?>" />
                        <label for="title">Titre</label>
                    </div>
                    <div class="form-floating">
                        <input class="form-control" type="text" name="leadparagraph" placeholder="Enter your leadparagraph..." value="<?php echo htmlspecialchars($donnees['leadparagraph']) ?>" />
                        <label for="leadparagraph">Chapô</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" type="textarea" name="content" placeholder="Enter your content here..." style="height: 12rem"><?php echo htmlspecialchars($donnees['content']) ?></textarea>
                        <label for="content">Contenu</label>
                    </div>
                    <div class="text-center mt-4">
                    <button class="btn btn-primary bg-secondary btn-xl" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </section>
        <?php include("footermenu.php"); ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>

    </body>
</html>
