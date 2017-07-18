<?php
/**
 * Created by PhpStorm.
 * User: VIPP
 * Date: 12/1/2016
 * Time: 12:18 AM
 */

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\CusineSubitems;
use common\models\ItemQuantity;


class ItemviewController extends Controller
{
    /**
     * This method will View the items base on id , when items click on index page on menu
     *
     * @param $id
     */

    public function actionView($id){

        //this will hold temporary image
        $images=Yii::getAlias('@web').'/Images/Burger.jpg';

        //first we will fetch data on the basis of id
        $model         =  CusineSubitems::findOne(['id'=>$id]);
        $quantityModel =  ItemQuantity::find()->where(['subitem_id'=>$model['id']])->all();

        //render model
        return $this->render('view',[
            'model'         =>  $model,
            'quantityModel' =>  $quantityModel,
            'images'        =>  $images
        ]);

    }
}