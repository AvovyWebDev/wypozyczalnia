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
        <main class="js-products">

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
                            <div class="input-div">
                                <label for="name">Imię:</label>
                                <input type="text" name="name" id="name" required>
                            </div>
                            <div class="input-div">
                                <label for="email">E-mail:</label>
                                <input type="email" name="email" id="email" required>
                            </div>
                            <div class="input-div">
                                <label for="subject">Temat:</label>
                                <input type="text" name="subject" id="subject" required>
                            </div>
                            <div class="input-div">
                                <label for="message">Treść:</label>
                                <textarea name="message" id="message" required></textarea>
                            </div>
                            <div class="policy-input">
                                <input type="checkbox" name="agree" id="agree" required>
                                <label for="agree">Zapoznałem/am się z <a href="policy.php">polityką prywatności</a>.</label>
                            </div>
                            <button class="btn-primary">Wyślij formularz</button>
                        </main>
                    </form>
            </div>
        </div>
    </section>
</main>

<script src="./scripts/products.js"></script>

<?php require_once('./includes/footer.php') ?>