<?php 
    $pageTitle = "Wypożyczalnia";
    ob_start();
?>

<link rel="stylesheet" href="styles/contact.css">

<?php
    $additionalStyles = ob_get_clean();
    require_once('./includes/header.php');
?>

<main>
    <div id="fill"></div>

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

<?php require_once('./includes/footer.php') ?>