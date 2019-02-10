<?php


require_once('store.php');
require_once('functions.php');

require_once('header.php');
?>

    <!-- Intro -->
    <section id="intro">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 p-1">
                    <div class="intro-item text-center">
                        <h1 class="intro-item__title mb-4">
                            <?= $intro['title']; ?>
                        </h1>
                        <h3 class="intro-item__title mb-5">
                            <?= $intro['subtitle']; ?>
                        </h3>
                        <a href="#" class="btn btn-primary open-modal-feedback">
                            Принять участие
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <a href="/" class="logo"></a>
        <ul class="links-list">
            <li>
                <a href="<?= $main_site_link; ?>">brainacad.zp.ua</a>
            </li>
            <li>
                <a href="#">
                    <svg width="20" height="20">
                        <use xlink:href="#facebook-icon"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="#">
                    <svg width="20" height="20">
                        <use xlink:href="#instagram-icon"></use>
                    </svg>
                </a>
            </li>
        </ul>
        
        <ul class="wrapper wrapper--circle">
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
            <li class="circle circle-little"></li>
            <li class="circle circle-little"></li>
            <li class="circle circle-little"></li>
            <li class="circle circle-normal"></li>
            <li class="circle circle-little"></li>
            <li class="circle circle-little"></li>
            <li class="circle circle-little"></li>
        </ul>
        <ul class="wrapper wrapper--heart">
            <li class="heart heart-short" style="background-image: url('images/decor/short-heart.png')"></li>
            <li class="heart heart-middle" style="background-image: url('images/decor/middle-heart.png')"></li>
            <li class="heart heart-long" style="background-image: url('images/decor/long-heart.png')"></li>
        </ul>
        <ul class="wrapper wrapper--balloon">
            <li class="balloon balloon-1"></li>
            <li class="balloon balloon-2"></li>
            <li class="balloon balloon-3"></li>
            <li class="balloon balloon-4"></li>
        </ul>
        <ul class="wrapper wrapper--cloud">
            <li class="cloud cloud-1" style="background-image: url('images/decor/cloud.png')"></li>
            <li class="cloud cloud-2" style="background-image: url('images/decor/cloud-2.png')"></li>
            <li class="cloud cloud-3" style="background-image: url('images/decor/cloud.png')"></li>
            <li class="cloud cloud-4" style="background-image: url('images/decor/cloud-2.png')"></li>
            <li class="cloud cloud-5" style="background-image: url('images/decor/cloud-2.png')"></li>
        </ul>
    </section>

    <!-- Modal -->
    <div class="custom-modal custom-modal--feedback">
        <div class="close-modal">
            <div class="line line--left"></div>
            <div class="line line--right"></div>
        </div>
        <div class="custom-modal-prev">
            <div class="img" style="background-image: url('images/bg/modal-bg.jpg')"></div>
            <ul class="decor">
                <div class="decor-cloud" style="background-image: url('images/decor/cloud.png')"></div>
                <div class="decor-cloud" style="background-image: url('images/decor/cloud-2.png')"></div>
            </ul>
        </div>
        <div class="custom-modal-main">
            <div class="title">
                <h2>
                    Регистрируйся 
                </h2>
                <h3>
                    и участвуй в розыгрыше
                </h3>
            </div>
            <div class="custom-modal-main-form">
                <form action="./send.php" method="POST">
                    <div class="form-column">
                        <div class="form-group">
                            <label for="user-name" class="label-placeholder">Ваше имя</label>
                            <input type="text" name="user_name" id="user-name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="user-email" class="label-placeholder">Email</label>
                            <input type="email" name="user_email" id="user-email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="user-phone" class="label-placeholder">Номер телефона</label>
                            <input type="tel" name="user_phone" id="user-phone" class="form-control">
                        </div>
                        <button class="btn btn-primary">Принять участие</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal-mask"></div>

<?php

require_once('footer.php');