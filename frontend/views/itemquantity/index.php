<?php
/* @var $this yii\web\View */
/* @var $mainModel common\models\Maincusine */
use common\models\CusineSubitems;
use common\models\Maincusine;
use common\models\ItemQuantity;
use yii\helpers\Html;


$this->title = 'Maincusines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Maincusine', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Cusine Items</th>
            <th>Description</th>
            <th>Half</th>
            <th>Price</th>
            <th>Full</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($mainModel as $mainItem => $item) { ?>

            <?php $item['cusinename'] ?>

            <?php
            $subModel = CusineSubitems::find()->where(['maincusine_id' => $item['id']])->all();
            foreach ($subModel as $subItem => $sub) {
                ?>
                <tr>

                    <td><?php echo $sub['subitem_name'] ?></td>
                    <td><?php echo $sub['item_description'] ?></td>
                    <?php
                    $quantityModel = ItemQuantity::find()->where(['subitem_id' => $sub['id']])->all();
                    foreach ($quantityModel as $quantityItem => $quantity) {
                        ?>
                        <td><?php echo $quantity['plate'] ?></td>
                        <td><?php echo $quantity['price'] ?></td>
                    <?php }
                    ?>
                </tr>
                <?php
            } ?>

            <?php
        } ?>

        </tbody>
    </table>
</div>

    <!--Main Dishes -->


            <div class="row">
            <div class="col-md-3">


            </div>
                <!--sub Items-->

                                    <div class="row">
                        <div class="col-md-3">

                        </div>
                        <!--Discription-->
                        <div class="col-md-3">

                        </div>
                    </div>


            </div>








