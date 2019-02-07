<?php

require_once('../store.php');
require_once('../functions.php');

require_once('../views/base/header-secondary.php');
?>

<section id="thanks-page">
    <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="row w-100">
            <div class="col-12">
                <div class="thanks-page-item text-center">
                    <h1 class="thanks-page-item__title">
                        Дякуємо!
                    </h1>
                    <div class="thanks-page-item__subtitle">
                        Наш менеджер з Вами зв'яжеться...
                    </div>
                    <a href="/" class="btn btn-primary">
                        На главную
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

require_once('../views/base/footer-secondary.php');