<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ItemQuantity */

$this->title = 'Update Item Quantity: ' . $Smodel->id;
$this->params['breadcrumbs'][] = ['label' => 'Item Quantities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $Smodel->id, 'url' => ['view', 'id' => $Smodel->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="item-quantity-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'Mmodel' => $Mmodel,
        'Smodel' => $Smodel,
        'Qmodel' => $Qmodel
    ]) ?>

</div>
