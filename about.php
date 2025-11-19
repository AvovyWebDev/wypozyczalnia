<?php 
    $pageTitle = "Wypożyczalnia";
    ob_start();
?>

<link rel="stylesheet" href="styles/about.css">

<?php
    $additionalStyles = ob_get_clean();
    require_once('./includes/header.php');
?>

<main>
    <div id="fill"></div>

    <section id="about_us">
        <h1>O nas</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam, repudiandae perspiciatis? Dolor, adipisci modi. Architecto officia obcaecati quas, doloremque aliquid maiores blanditiis necessitatibus debitis reiciendis adipisci quos impedit alias quia, a tempore? Tempore ipsum magni possimus error amet corrupti blanditiis labore excepturi enim. Eum consequuntur neque voluptates ducimus perspiciatis vel!</p>
    </section>

    <section id="about_main">
            <!-- 1 item-->
        <section class="about_container">
            <div class="about_left">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor enim dolorum quia soluta iusto saepe maxime provident repudiandae. Repellendus delectus quibusdam quidem id pariatur ea quae itaque iure molestiae doloremque!</p>
            </div>
            <div class="about_right">
                <img src="images/kosiarka.webp" alt="">
            </div>
    </section>
            <!-- 2 item-->
        <section class="about_container darker">
            <div class="about_left">
               <img src="images/kosiarka.webp" alt="">
            </div>
            <div class="about_right">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor enim dolorum quia soluta iusto saepe maxime provident repudiandae. Repellendus delectus quibusdam quidem id pariatur ea quae itaque iure molestiae doloremque!</p>
            </div>
        </section>

        <!-- 3 item-->
        <section class="about_container">
            <div class="about_left">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor enim dolorum quia soluta iusto saepe maxime provident repudiandae. Repellendus delectus quibusdam quidem id pariatur ea quae itaque iure molestiae doloremque!</p>
            </div>
            <div class="about_right">
                <img src="images/kosiarka.webp" alt="">
            </div>
        </section>
        <!-- 4 item-->
        <section class="about_container darker">
            <div class="about_left">
                <img src="images/kosiarka.webp" alt="">
            </div>
            <div class="about_right">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor enim dolorum quia soluta iusto saepe maxime provident repudiandae. Repellendus delectus quibusdam quidem id pariatur ea quae itaque iure molestiae doloremque!</p>
            </div>
        </section>
    </section>
</main>

<?php require_once('./includes/footer.php') ?>