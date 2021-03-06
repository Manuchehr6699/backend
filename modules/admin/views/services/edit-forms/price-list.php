<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\PriceList */
/* @var $form yii\widgets\ActiveForm */
$model->service_id = $service_id['id'];

?>

<div class="price-list-form">

   <?php if (!empty($priceListData) && count($priceListData) > 0): ?>
       <div class="col-lg-12">
           <p>
              <?= Html::button('Добавить', ['class' => 'btn btn-success', 'id' => 'price-form']) ?>
           </p>
       </div>
       <div class="col-lg-12" id="frm-content-price">
           <div class="table-responsive">
               <table class="table table-striped custom-table table-hover">
                   <thead>
                   <tr>
                       <th>№</th>
                       <th>Подпись</th>
                       <th>Толщина</th>
                       <th>Длина</th>
                       <th>Цена</th>
                       <th>Срок выполнение</th>
                       <th>Описание</th>
                       <th>Тип</th>
                       <th>Действие</th>
                   </tr>
                   </thead>
                   <tbody>
                   <?php $i = 0;
                   foreach ($priceListData as $price): $i++ ?>
                       <tr>
                           <td><?= $i ?></td>
                           <td><?= $price['signature'] ?></td>
                           <td><?= $price['depth'] ?></td>
                           <td><?= $price['length'] ?></td>
                           <td><?= $price['price'] ?></td>
                           <td><?= $price['deadline'] ?></td>
                           <td><?= $price['description'] ?></td>
                          <?php if ($price['type'] == 1): ?>
                              <td>Список</td>
                          <?php else: ?>
                              <td>Таблица</td>
                          <?php endif; ?>
                           <td>
                              <?php if ($price['status'] == 1): ?>
                                  <a class="btn btn-success btn-xs" data-id="<?= $price['id'] ?>"
                                     data-text="<?= $price['status'] ?>" title="Статус"
                                     onclick="changeStatusPriceList(this)">
                                      <i class="fa fa-check" id="prstatus<?= $price['id'] ?>"></i>
                                  </a>
                              <?php else: ?>
                                  <a class="btn btn-danger btn-xs" data-id="<?= $price['id'] ?>"
                                     data-text="<?= $price['status'] ?>" title="Статус"
                                     onclick="changeStatusPriceList(this)">
                                      <i class="fa fa-times" id="prstatus<?= $price['id'] ?>"></i>
                                  </a>
                              <?php endif; ?>
                               <a class="btn btn-danger btn-xs"
                                  href="/admin/price-list/delete?id=<?= $price['id'] ?>"
                                  data-confirm="Вы уверены что хотите удалить этот прайс лист?">
                                   <i class="fa fa-trash-o" title="Удалить"></i>
                               </a>
                               <a class="btn btn-primary btn-xs"
                                  href="/admin/price-list/update?id=<?= $price['id'] ?>">
                                   <i class="fa fa-pencil" title="Изменить"></i>
                               </a>
                           </td>
                       </tr>
                   <?php endforeach; ?>
                   </tbody>
               </table>
           </div>
       </div>
   <?php else: ?>

       <!--    <h3 style="text-align: center">Прайс лист</h3>-->
      <?php $form = ActiveForm::begin(); ?>
       <div class="row">
           <div class="col-lg-6">
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                  <?= $form->field($model, 'signature')->textInput(['maxlength' => true]) ?>
               </div>
           </div>
           <div class="col-lg-6">
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                  <?= $form->field($model, 'price')->textInput() ?>
               </div>
           </div>
       </div>
       <div class="row">
           <div class="col-lg-6">
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                  <?= $form->field($model, 'depth')->textInput() ?>
               </div>
           </div>
           <div class="col-lg-6">
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                  <?= $form->field($model, 'length')->textInput() ?>
               </div>
           </div>
       </div>
       <div class="row">
           <div class="col-lg-6">
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                  <?= $form->field($model, 'deadline')->textInput() ?>
               </div>
           </div>
           <div class="col-lg-6">
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                  <?= $form->field($model, 'type')->dropDownList(['2' => 'Таблица', '1' => 'Список']) ?>
               </div>
           </div>
       </div>
       <div class="row">
           <div class="col-lg-12">
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                  <?= $form->field($model, 'status')->dropDownList(['1' => 'Включен', '0' => 'Отключен']) ?>
               </div>
           </div>

       </div>
       <div class="row">
           <div class="col-lg-12">
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                  <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>
               </div>
           </div>
       </div>
       <div class="col-lg-12 text-center">
          <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Обновить', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink']) ?>
       </div>
      <?php ActiveForm::end(); ?>
   <?php endif; ?>
</div>