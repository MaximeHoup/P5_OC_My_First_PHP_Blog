
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top mb-5" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.php#page-top">Maxime HOUPIARPANIN</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Accueil</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="postlist.php">Liste des posts</a></li>
                        <?php
                        session_start();
                        $admin = $_SESSION['admin'];
                        if ($admin == "1") {
                            ?>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="createpost.php">Créer un post</a></li>
                            <?php
                        }

                        if (isset($_SESSION['users_id']))
                        {
                            ?>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="../model/logoutpage.php">Déconnexion</a></li>
                            <?php
                        }
                        else
                        {
                        ?>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="loginpage.php">Connexion/Inscription</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>