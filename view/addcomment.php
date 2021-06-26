 <div class="container bg-light mt-4">
                <h2 class="page-section-heading text-center text-uppercase pt-5">Ajouter un commentaire</h2>
                <!-- Icon Divider-->
                <div class="divider-custom mb-4">
                    <div class="divider-custom-line"></div>
                </div>

                <form action="../model/addcomment.php?post=<?php echo $_GET['post'] ?>" method="post">
                    <div class="form-floating">
                        <input class="form-control" type="text" name="nickname" placeholder="Enter your name..." />
                        <label for="nickname">Pseudo</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" name="content" placeholder="Enter your content here..." style="height: 12rem"></textarea>
                        <label for="content">Message</label>
                    </div>
                    <div class="text-center mt-4 pb-4">
                    <button class="btn btn-secondary btn-xl" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>