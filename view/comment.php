            <div class="container bg-light mt-4">
                <h2 class="page-section-heading text-center text-uppercase pt-5">Commentaires</h2>
                <div class="divider-custom divider-black">
                    <div class="divider-custom-line"></div>
                </div>

                <?php
                require_once('../model/dbconnect.php');
                $reponse = $bdd->prepare('SELECT content, users_id, commentaccepted, date_format(commentdate, \'(%d/%m/%Y à %Hh%imin%ss)\') AS commentdatefr FROM comments WHERE posts_id = ?');
                $reponse->execute(array($_GET['post']));


                ?>

                <div class="row mt-5">
                    <?php while ($donnees = $reponse->fetch())
                    {
                        if($donnees['commentaccepted'] == 1)
                        {
                        ?>
                        <div class="col-12 mt-2 mb-2 pb-5">
                            <div class="card bg-secondary">
                                <div class="card-header">
                                    <p class="text-white"><strong>Pseudo<?php echo ($donnees ['users_id']); ?></strong></p>
                                </div>
                                <div class="card-body bg-white">
                                    <blockquote>
                                        <p><?php echo htmlspecialchars($donnees ['content']); ?></p>
                                        <footer class="blockquote-footer"><?php echo ($donnees ['commentdatefr']); ?></footer>                         
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    

                        <?php
                        }
                    }
                 $reponse->closeCursor(); 
                 ?>
                </div>
            </div>

