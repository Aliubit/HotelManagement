<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Maincusine */

$this->title = 'Update Maincusine: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Maincusines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="maincusine-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
