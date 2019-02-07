<?php


require_once('store.php');
require_once('functions.php');

require_once('header.php');
?>

    <!-- Intro -->
    <section id="intro">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12">
                    <div class="intro-item text-center">
                        <h1 class="intro-item__title mb-4">
                            <?= $intro['title']; ?>
                        </h1>
                        <h3 class="intro-item__title mb-5">
                            <?= $intro['subtitle']; ?>
                        </h3>
                        <a href="#" class="btn btn-primary open-modal">
                            Принять участие
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <a href="/" class="logo"></a>
        <a href="<?= $main_site_link; ?>" class="main-site-link">brainacad.zp.ua</a>
        <ul class="wrapper-circle">
            <li class="circle circle-normal"></li>
            <li class="circle circle-little"></li>
            <li class="circle circle-big"></li>
            <li class="circle circle-normal"></li>
            <li class="circle circle-little"></li>
            <li class="circle circle-big"></li>
            <li class="circle circle-normal"></li>
            <li class="circle circle-little"></li>
            <li class="circle circle-little"></li>
            <li class="circle circle-little"></li>
            <li class="circle circle-normal"></li>
            <li class="circle circle-little"></li>
            <li class="circle circle-big"></li>
            <li class="circle circle-normal"></li>
            <li class="circle circle-big"></li>
            <li class="circle circle-little"></li>
            <li class="circle circle-little"></li>
            <li class="circle circle-normal"></li>
            <li class="circle circle-little"></li>
        </ul>
    </section>

<?php

require_once('footer.php');