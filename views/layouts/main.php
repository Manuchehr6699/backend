<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="Главная">
    <meta property="og:locale" content="ru_RU">
    <script>document.documentElement.classList.add('js');</script>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="<?= Yii::getAlias('@web') ?>/img/favicon.ico" type="image/x-icon">
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body class="body">
<div id="root">
    <div class="page">
        <?php $this->beginBody() ?>
        <?= $this->render('header') ?>

        <main class="page__content">
            <div class="content">
                <?= $content ?>
                <?= $this->render('footer-contact') ?>
            </div>
        </main>

        <?= $this->render('footer') ?>

        <div class="page__modal">
            <page-modal inline-template>
                <div class="page-modal">
                    <div class="page-modal__list">
                        <div id="modal-thanks">
                            <section class="thanks is-compact">
                                <div class="thanks__container">
                                    <header class="thanks__header"><p class="thanks__caption">Наш техник скоро свяжется
                                            с вами,<br>и Вы зададите ему любые вопросы</p></header>
                                    <footer class="thanks__footer">
                                        <div class="not-found__phone">
                                            <div class="phone is-big is-centred"><p class="phone__caption">Позвоните
                                                    нам</p><a class="phone__value" href="tel:8 (952) 687-58-04">8 (952)
                                                    687-58-04</a></div>
                                        </div>
                                    </footer>
                                </div>
                            </section>
                        </div>
                        <div id="modal-callback">
                            <callback-form inline-template>
                                <validation-observer ref="observer">
                                    <form class="callback-form form" action="/thanks.html" @submit="onsubmit">
                                        <header class="form__header"><h3 class="form__title title">Заказать обратный
                                                звонок</h3></header>
                                        <div class="form__body">
                                            <div class="grid is-columns">
                                                <div class="col-6">
                                                    <div class="form__control">
                                                        <div class="form__field">
                                                            <v-input inline-template :field-name="'name'"
                                                                     :visible-errors="[]">
                                                                <validation-provider class="v-input"
                                                                                     :class="{ &quot;is-active&quot;: active, &quot;is-ready&quot;: ready }"
                                                                                     ref="provider" v-slot="{ errors }">
                                                                    <label class="v-input__label"><span
                                                                                class="v-input__placeholder">Ваше имя</span><input
                                                                                class="v-input__field" name="name"
                                                                                v-model="value"
                                                                                @focus="handler(&quot;focus&quot;)"
                                                                                @blur="handler(&quot;blur&quot;)"><span
                                                                                class="v-input__errors"
                                                                                v-if="errors.length &gt; 0"><span
                                                                                    class="v-input__error"
                                                                                    v-for="error in errors">{{ error }}</span></span></label>
                                                                </validation-provider>
                                                            </v-input>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form__control">
                                                        <div class="form__field">
                                                            <v-input inline-template :field-name="'name'"
                                                                     :visible-errors="[]">
                                                                <validation-provider class="v-input"
                                                                                     rules="required|phone"
                                                                                     :class="{ &quot;is-active&quot;: active, &quot;is-ready&quot;: ready }"
                                                                                     ref="provider" v-slot="{ errors }">
                                                                    <label class="v-input__label"><span
                                                                                class="v-input__placeholder">Номер телефона</span><input
                                                                                class="v-input__field" name="name"
                                                                                v-model="value"
                                                                                v-mask="&quot;+7 (###) ### ## ##&quot;"
                                                                                @focus="handler(&quot;focus&quot;)"
                                                                                @blur="handler(&quot;blur&quot;)"><span
                                                                                class="v-input__errors"
                                                                                v-if="errors.length &gt; 0"><span
                                                                                    class="v-input__error"
                                                                                    v-for="error in errors">{{ error }}</span></span></label>
                                                                </validation-provider>
                                                            </v-input>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <footer class="form__footer">
                                            <div class="form__agreement"><label class="checkbox"><input
                                                            class="checkbox__input" type="checkbox" name="agreement"
                                                            required><span class="checkbox__label">Заказывая обратный звонок, даю согласие на обработку <a
                                                                href="/policy.html">персональных данных</a></span></label>
                                            </div>
                                            <div class="form__button">
                                                <button class="button is-wide is-large">Перезвоните мне в течении 20
                                                    минут
                                                </button>
                                            </div>
                                        </footer>
                                    </form>
                                </validation-observer>
                            </callback-form>
                        </div>
                        <div id="modal-callback-with-attach">
                            <callback-form inline-template>
                                <validation-observer ref="observer">
                                    <form class="callback-form form" action="/thanks.html" @submit="onsubmit">
                                        <header class="form__header"><h3 class="form__title title">Заказать по
                                                чертежу</h3></header>
                                        <div class="form__body">
                                            <div class="grid is-columns">
                                                <div class="col-6">
                                                    <div class="form__control">
                                                        <div class="form__field">
                                                            <v-input inline-template :field-name="'name'"
                                                                     :visible-errors="[]">
                                                                <validation-provider class="v-input"
                                                                                     :class="{ &quot;is-active&quot;: active, &quot;is-ready&quot;: ready }"
                                                                                     ref="provider" v-slot="{ errors }">
                                                                    <label class="v-input__label"><span
                                                                                class="v-input__placeholder">Ваше имя</span><input
                                                                                class="v-input__field" name="name"
                                                                                v-model="value"
                                                                                @focus="handler(&quot;focus&quot;)"
                                                                                @blur="handler(&quot;blur&quot;)"><span
                                                                                class="v-input__errors"
                                                                                v-if="errors.length &gt; 0"><span
                                                                                    class="v-input__error"
                                                                                    v-for="error in errors">{{ error }}</span></span></label>
                                                                </validation-provider>
                                                            </v-input>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form__control">
                                                        <div class="form__field">
                                                            <v-input inline-template :field-name="'name'"
                                                                     :visible-errors="[]">
                                                                <validation-provider class="v-input"
                                                                                     rules="required|phone"
                                                                                     :class="{ &quot;is-active&quot;: active, &quot;is-ready&quot;: ready }"
                                                                                     ref="provider" v-slot="{ errors }">
                                                                    <label class="v-input__label"><span
                                                                                class="v-input__placeholder">Номер телефона</span><input
                                                                                class="v-input__field" name="name"
                                                                                v-model="value"
                                                                                v-mask="&quot;+7 (###) ### ## ##&quot;"
                                                                                @focus="handler(&quot;focus&quot;)"
                                                                                @blur="handler(&quot;blur&quot;)"><span
                                                                                class="v-input__errors"
                                                                                v-if="errors.length &gt; 0"><span
                                                                                    class="v-input__error"
                                                                                    v-for="error in errors">{{ error }}</span></span></label>
                                                                </validation-provider>
                                                            </v-input>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form__control">
                                                        <div class="form__field"><input class="attach" type="file"
                                                                                        name="file"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <footer class="form__footer">
                                            <div class="form__agreement"><label class="checkbox"><input
                                                            class="checkbox__input" type="checkbox" name="agreement"
                                                            required><span class="checkbox__label">Заказывая обратный звонок, даю согласие на обработку <a
                                                                href="/policy.html">персональных данных</a></span></label>
                                            </div>
                                            <div class="form__button">
                                                <button class="button is-wide is-large">Отправить</button>
                                            </div>
                                        </footer>
                                    </form>
                                </validation-observer>
                            </callback-form>
                        </div>
                    </div>
                    <div class="page-modal__template" ref="template">
                        <div class="page-modal__inner" ref="inner" @transitionend.stop="">
                            <button class="page-modal__close" @click="close" title="Закрыть"></button>
                            <div class="page-modal__content" ref="content"></div>
                        </div>
                    </div>
                </div>
            </page-modal>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>