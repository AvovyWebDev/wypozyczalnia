<?php 
    $pageTitle = "Wypożyczalnia";
    ob_start();
?>

<link rel="stylesheet" href="styles/products.css">

<?php
    $additionalStyles = ob_get_clean();
    require_once('./includes/header.php');
?>

<main>
    <div id="fill"></div>
        <section id="main">
            <div class="text_main">
                <h1>Nasz sprzęt</h1>
            </div>
                <!--products start-->
                <div class="products">
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
            </div>
            <!--end-->
            
        </section>
    </main>

<?php require_once('./includes/footer.php') ?>