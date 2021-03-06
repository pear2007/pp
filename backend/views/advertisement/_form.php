<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Advertisement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="advertisement-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php  // echo $form->field($model, 'pic')->textInput(['maxlength' => true]) ?>

    <?php  //echo $form->field($model, 'content')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'pic')->textInput(['maxlength' => true])->widget('common\widgets\file_upload\FileUpload', []) ?>
    <?= $form->field($model, 'content')->textarea(['rows' => 6])->widget('kucha\ueditor\UEditor', []) ?>

     
    <?= $form->field($model, 'status')->radioList( ['1'=>'显示','2'=>'隐藏']   )?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
