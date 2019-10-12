<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 08.10.2019
 * Time: 0:17
 */
$this->title = '404 Страница не найдена';
?>
<div class="content__not-found">
    <section class="not-found">
        <div class="container">
            <header class="not-found__header"><h1 class="not-found__title"><?= $errorPage['title'] ?></h1>
            </header>
            <div class="not-found__body">
                <div class="not-found__image"></div>
            </div>
            <footer class="not-found__footer">
                <div class="not-found__button">
                    <a class="button is-wide is-large" href="/page/service-cold-stamping">
                        Перейти к услугам
                    </a>
                </div>
                <div class="not-found__button">
                    <a class="button is-bordered is-wide is-grey" href="/">
                        На главную
                    </a>
                </div>
            </footer>
        </div>
    </section>
</div>
