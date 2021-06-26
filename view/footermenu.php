        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Maxime Houpiarpanin 2021 
            	<?php
                session_start();
                $admin = $_SESSION['admin'];
            	if ($admin == "1") {
                    
            		?>
            		 | <a href="adminpage.php">Espace d'administration</a></small></div>
            		<?php
            	}
            	?>
        </div>

