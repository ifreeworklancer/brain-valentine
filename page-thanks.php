<?php


require_once('store.php');
require_once('functions.php');

require_once('header.php');
?>

<section id="page-thanks">
    <div class="container h-100">
        <div class="row w-100 h-100 m-0">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="page-thanks-item text-center">
                    <h1 class="page-thanks-item__title">
                        Спасибо!
                    </h1>
                    <h2 class="page-thanks-item__subtitle mb-4">
                        Наш менеджер свяжется с Вами
                    </h2>
                    <a href="/" class="btn btn-primary">
                        На главную
                    </a>
                </div>
            </div>
        </div>
    </div>
    <ul class="decor">
        <li class="balloon balloon--big" style="background-image: url('images/decor/balloon.svg')"></li>
        <li class="balloon balloon--normal" style="background-image: url('images/decor/balloon.svg')"></li>
        <li class="cloud cloud-1" style="background-image: url('images/decor/cloud.png')"></li>
        <li class="cloud cloud-2" style="background-image: url('images/decor/cloud.png')"></li>
        <li class="cloud cloud-3" style="background-image: url('images/decor/cloud-2.png')"></li>
    </ul>
</section>

<?php

require_once('footer.php');