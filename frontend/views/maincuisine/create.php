<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Maincusine */

$this->title = 'Create Maincusine';
$this->params['breadcrumbs'][] = ['label' => 'Maincusines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maincusine-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
