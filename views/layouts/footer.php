<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 08.10.2019
 * Time: 21:45
 */

use app\modules\admin\models\FrontMenu;

?>

<footer class="page__footer">
    <div class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="grid is-row">
                    <div class="col-4">
                        <div class="footer__logo">
                            <div class="logo is-light is-vertical in-footer">
                                <div class="logo__label"><?= Yii::$app->settings->get('Сайт', 'имя') ?></div>
                                <div class="logo__caption"><?= Yii::$app->settings->get('Сайт', 'описание') ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <?= FrontMenu::PrintToFooter() ?>
                    </div>
                    <div class="col-2">
                        <div class="footer__links">
                            <div class="links is-additional">
                                <ul class="links__list">
                                    <li class="links__item"><a class="links__link" href="/page/about">
                                            О компании
                                        </a></li>
                                    <li class="links__item"><a class="links__link"
                                                               href="/page/contact">Контакты</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="grid is-row is-middle">
                    <div class="col-4">
                        <p class="footer__copy">© <?= date('Y') ?>
                            <?= Yii::$app->settings->get('Сайт', 'Имя компании') ?>
                        </p>
                    </div>
                    <div class="col-4"><a class="footer__policy" href="/page/privacy-policy"><?= Yii::$app->settings->get('Сайт', 'privacy') ?></a></div>
                    <div class="col-4">
                        <div class="footer__dc">
                            <a class="dc" href="//dancecolor.ru" target="_blank" rel="noreferrer">
                                <div class="dc__text">Сделано</div>
                                <div class="dc__logo"></div>
                                <div class="dc__label">DANCECOLOR</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
