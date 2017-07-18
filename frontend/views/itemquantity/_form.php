<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\CusineSubitems;
use common\models\Maincusine;
use common\models\ItemQuantity;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model common\models\ItemQuantity */
/* @var $form yii\widgets\ActiveForm */

$mainCusine=Maincusine::find()->all();

//use yii\helpers\ArrayHelper;

$listData=ArrayHelper::map($mainCusine,'id','cusinename');

?>

<div class="item-quantity-form">


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($Mmodel, 'cusinename')->textInput(['maxlength' => true])->dropDownList(
                                $listData,
                                ['prompt'=>'Select...']);
 ?>
    <?= $form->field($Smodel, 'subitem_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($Smodel, 'item_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($Qmodel, 'plate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($Qmodel, 'price')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($Smodel->isNewRecord ? 'Create' : 'Update', ['class' => $Smodel->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
