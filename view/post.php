<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include ("head.php"); ?>
    </head>

    <body>
        <?php
        include("navbar.php"); 
        require_once('../model/dbconnect.php');
        $reponse = $bdd->prepare('SELECT title, leadparagraph, content, nickname, date_format(modificationdate, \'%d/%m/%Y à %Hh%imin%ss\') AS modificationdatefr FROM posts WHERE posts_id = ?');
        $reponse->execute(array($_GET['post']));
        $donnees = $reponse->fetch();
        ?>
       
        <section class="page-section bg-primary text-secondary mt-5" id="post">
            <div class="container bg-light pb-3">
                <h2 class="page-section-heading text-center text-uppercase pt-5"><?php echo htmlspecialchars($donnees ['title']); ?></h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-black">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class ="text-center">
                <img src="../assets/img/oc.jpg" alt="image du post">
                </div>
                <p class="border-top border-bottom mt-3"><strong>Auteur: </strong><?php echo ($donnees ['nickname']); ?>
                    <span STYLE="padding:0 0 0 65px;"><strong>Dernière modification </strong>le <?php echo $donnees ['modificationdatefr']; ?></span></p>
                <h3 class="text-center pt-3 pb-4"><?php echo htmlspecialchars($donnees ['leadparagraph']); ?></h3>
                <p><?php echo htmlspecialchars($donnees ['content']); ?></p>

                <?php $reponse->closeCursor(); ?>
            </div>
        

        <?php include("comment.php"); ?>
        <?php include("addcomment.php"); ?>
        </section>

        <?php include("footermenu.php"); ?>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
    </body>
</html>