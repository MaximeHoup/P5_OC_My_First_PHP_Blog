<!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Me contacter</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form method="post" action="../controller/mailcheck.php">
                            <div class="form-floating">
                                <input class="form-control" id="inputName" type="text" name="name" placeholder="Enter your name..." required pattern="^[A-Za-z '-]+$" maxlength="20" />
                                <label for="inputName">Nom</label>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="inputEmail" type="email" name="mail"placeholder="Enter your email..." required pattern="^[A-Za-z]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$" />
                                <label for="inputEmail">Adresse mail</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" id="inputMessage" name="content"placeholder="Enter your message here..." style="height: 12rem"></textarea>
                                <label for="inputMessage">Message</label>
                            </div>
                            <div class="text-center mt-4">
                            <button class="btn btn-primary btn-xl" type="submit">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>