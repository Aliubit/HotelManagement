<?php

namespace frontend\controllers;
use common\models\CusineSubitems;
use common\models\Maincusine;
use common\models\ItemQuantity;


class ItemquantityController extends \yii\web\Controller
{
    public function actionIndex()
    {
        //main items record
        $mainModel = Maincusine::find()->all();

        //this is to render page
        return $this->render('index',[
            'mainModel' => $mainModel
        ]);
    }

    /**
     * This method is used for viewing the Product
     *
     * @return string
     */
    public function actionView($id)
    {
        $subModel = CusineSubitems::find()->where(['id'=>$id])->one();


        $quantityModel = ItemQuantity::find()->where(['subitem_id'=>$subModel['id']])->one();

        $mainModel = Maincusine::find()->where(['id'=>$subModel['maincusine_id']])->one();



       // echo "<pre>";print_r($mainModel);die;

        return $this->render('view',[
            'Mmodel' => $mainModel,
            'Smodel' => $subModel,
            'Qmodel' => $quantityModel
        ]);
    }

    /**
     * This method will update product
     *
     * @return string
     */
    public function actionUpdate()
    {
        $Smodel = new CusineSubitems();
        $Mmodel = new Maincusine();
        $Qmodel = new ItemQuantity();
        return $this->render('update',[
            'Mmodel' => $Mmodel,
            'Smodel' => $Smodel,
            'Qmodel' => $Qmodel
        ]);
    }

    /**
     * This method is used to create Product
     *
     *
     * @return string
     */
    public function actionCreate()
    {
        $Mmodel = new Maincusine();
        $Smodel = new CusineSubitems();
        $Qmodel = new ItemQuantity();

        if(isset($_POST) && !empty($_POST) ){
            //

            /*$Mmodel->cusinename = $_POST['cusinename'];
            $Mmodel->save();*/

            $Smodel->maincusine_id = $_POST['Maincusine']['cusinename'];
            $Smodel->subitem_name =  $_POST['CusineSubitems']['subitem_name'];
            $Smodel->item_description =  $_POST['CusineSubitems']['item_description'];
            $Smodel->save();

            $id =(new \yii\db\Query())
                ->select('Max(id)')
                ->from('cusine_subitems')
                ->where(['subitem_name' => $_POST['CusineSubitems']['subitem_name']])
                ->all();
            //echo "<pre>";print_r($id);die;
            $Qmodel->subitem_id = $id[0]['Max(id)'];
            $Qmodel->plate = $_POST['ItemQuantity']['plate'];
            $Qmodel->price = $_POST['ItemQuantity']['price'];
            $Qmodel->save();

            return $this->redirect(['index']);


        }

        return $this->render('create',[
            'Mmodel' => $Mmodel,
            'Smodel' => $Smodel,
            'Qmodel' => $Qmodel
        ]);
    }

    /*This will delete and item from database */
    public function Delete()
    {

    }



}
