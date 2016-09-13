<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ListView;


/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = $date->title;
 
?>

<hr>
<div class="content">



    <?= ListView::widget([
        'dataProvider' => $ar,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($ar, $key, $index, $widget) {
            return Html::a(Html::encode($ar->title), ['info/view', 'id' => $ar->id]);
        },
    ]) ?>

    <hr>
</div>