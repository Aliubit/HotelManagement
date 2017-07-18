<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ItemQuantity */

$this->title = 'Create Item Quantity';
$this->params['breadcrumbs'][] = ['label' => 'Item Quantities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-quantity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'Mmodel' => $Mmodel,
        'Smodel' => $Smodel,
        'Qmodel' => $Qmodel
    ]) ?>

</div>
