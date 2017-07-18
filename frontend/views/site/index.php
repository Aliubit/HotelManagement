<?php

use common\models\CusineSubitems;
use yii\web\View;

/* @var $this yii\web\View */
$this->title = 'My Yii Application';

$this->registerAssetBundle(yii\web\JqueryAsset::className(), View::POS_HEAD);
?>
<div class="site-index">

    <div class="body-content" style="margin-top: 20px;">

        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <!-- Menu -->
                    <ol class="carousel-indicators">
                    <?php
                    $counter = 1;
                    foreach ($images as $image)
                    { ?>

                        <li data-target="#carousel" data-slide-to="<?php echo $counter?>" ></li>

                    <?php
                        $counter += 1;
                    }
                    ?>
                    </ol>

                    <!-- Items -->
                    <div class="carousel-inner">
                        <?php
                        $counter = 1;
                        foreach ($images as $image)
                         { ?>
                        <div class="item ">
                            <img src="<?= $image?>" alt="Slide <?php echo $counter?> " />
                        </div>
                        <?php
                             $counter += 1;
                          }
                          ?>

                    </div>
                    <a href="#carousel" class="left carousel-control" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#carousel" class="right carousel-control" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>


            </div>

        </div>
                <!--third row is for Menue-->
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-offset-2 col-md-8">
                <?php

                //we have taken out data from multidimensional data into single array
                //this is for our convience
                //we will render single araay to index view
                foreach ($mainCuisine as $key => $value){

                    ?>
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse<?= $key ?>"><?= $value['cusinename'] ?></a>
                                </h4>
                            </div>
                            <div id="collapse<?= $key ?>" class="panel-collapse collapse">
                                <?php
                                $subCusine = CusineSubitems::find()->where(['maincusine_id'=>$value['id']])->all();
                                foreach ($subCusine as $key => $value) {
                                    ?>
                                    <div class="panel-body">
                                        <a href="<?php echo Yii::$app->urlManager->createUrl(['itemview/view']).'?id='.$value['id']?>"><?= $value['subitem_name']?></a>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <?php
                }

                ?>

            </div>
        </div>

    </div>

</div>

<style>
    .carousel {
        height: 350px;
        margin-bottom: 60px;
    }
    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
        z-index: 10;
    }
    /* Declare heights because of positioning of img element */
    .carousel .item {
        width: 100%;
        height: 350px;
        background-color: #777;
    }
    .carousel-inner > .item > img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 350px;
    }
    @media (min-width: 768px) {
        .carousel-caption p {
            margin-bottom: 20px;
            font-size: 21px;
            line-height: 1.4;
        }
    }
    img {
        background: red;
    }

</style>
<script>


    $(function(){
        $('.carousel-inner div:first-child').addClass('active');
        $('.carousel-indicators li:first-child').addClass('active');
        $("#carousel").carousel();
    });
</script>
