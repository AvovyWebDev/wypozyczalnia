<?php 
    $pageTitle = "Wypożyczalnia";
    ob_start();
?>

<link rel="stylesheet" href="styles/home.css">

<?php
    $additionalStyles = ob_get_clean();
    require_once('./includes/header.php');
?>

    <div id="hero">
        <img src="" alt="">
    </div>

<main>
    <div class="hero-filler"></div>

    <section class="about">
        <h1>O nas</h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum omnis optio nulla laborum! Possimus eos, modi tenetur dolores nisi iste quia optio ratione quidem harum consectetur, iusto accusantium dicta libero. </p>
    </section>

    <section class="products">
        <h1>Nasz sprzęt</h1>
        <main>

            <div class="tile">
                <img src="" alt="">
                <div class="content">
                    <div class="products-text">
                        <h1>Kosiarka</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam fugiat non nemo in aperiam?</p>
                    </div>
                    <div>
                        <button class="btn-primary">Więcej informacji</button>
                        <div class="price">200zł/dzień</div>
                    </div>
                </div>
            </div>

            
            <div class="tile">
                <img src="" alt="">
                <div class="content">
                    <div class="products-text">
                        <h1>Kosiarka</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam fugiat non nemo in aperiam?</p>
                    </div>
                    <div>
                        <button class="btn-primary">Więcej informacji</button>
                        <div class="price">200zł/dzień</div>
                    </div>
                </div>
            </div>
            <div class="tile">
                <img src="" alt="">
                <div class="content">
                    <div class="products-text">
                        <h1>Kosiarka</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam fugiat non nemo in aperiam?</p>
                    </div>
                    <div>
                        <button class="btn-primary">Więcej informacji</button>
                        <div class="price">200zł/dzień</div>
                    </div>
                </div>
            </div>
            <div class="tile">
                <img src="" alt="">
                <div class="content">
                    <div class="products-text">
                        <h1>Kosiarka</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam fugiat non nemo in aperiam?</p>
                    </div>
                    <div>
                        <button class="btn-primary">Więcej informacji</button>
                        <div class="price">200zł/dzień</div>
                    </div>
                </div>
            </div>
            <div class="tile">
                <img src="" alt="">
                <div class="content">
                    <div class="products-text">
                        <h1>Kosiarka</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam fugiat non nemo in aperiam?</p>
                    </div>
                    <div>
                        <button class="btn-primary">Więcej informacji</button>
                        <div class="price">200zł/dzień</div>
                    </div>
                </div>
            </div>
            <div class="tile">
                <img src="" alt="">
                <div class="content">
                    <div class="products-text">
                        <h1>Kosiarka</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam fugiat non nemo in aperiam?</p>
                    </div>
                    <div>
                        <button class="btn-primary">Więcej informacji</button>
                        <div class="price">200zł/dzień</div>
                    </div>
                </div>
            </div>
            <div class="tile">
                <img src="" alt="">
                <div class="content">
                    <div class="products-text">
                        <h1>Kosiarka</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam fugiat non nemo in aperiam?</p>
                    </div>
                    <div>
                        <button class="btn-primary">Więcej informacji</button>
                        <div class="price">200zł/dzień</div>
                    </div>
                </div>
            </div>
            <div class="tile">
                <img src="" alt="">
                <div class="content">
                    <div class="products-text">
                        <h1>Kosiarka</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam fugiat non nemo in aperiam?</p>
                    </div>
                    <div>
                        <button class="btn-primary">Więcej informacji</button>
                        <div class="price">200zł/dzień</div>
                    </div>
                </div>
            </div>

        </main>
    </section>

    <section id="contact">
         <div id="form">
            <div id="contact_form">
                    <form method="post" action="submit.php">
                        <h1>Kontakt</h1>
                        <main class="form-main">
                                <input type="text" name="name" id="name" placeholder="Imię" required>
                            <input type="email" name="email" id="email" placeholder="E-mail" required>
                            <input type="text" name="subject" id="subject" placeholder="Temat" required>
                            <textarea name="message" id="message" placeholder="Treść" required></textarea>
                            <div class="policy-input">
                                <input type="checkbox" name="agree" id="agree" required>
                                <label for="agree">Zapoznałem/am się z <a href="policy.php">polityką prywatności</a>.</label>
                            </div>
                            <button class="send-form">Wyślij formularz</button>
                        </main>
                    </form>
            </div>
        </div>
    </section>
</main>

<?php require_once('./includes/footer.php') ?>