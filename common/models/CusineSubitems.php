<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cusine_subitems".
 *
 * @property integer $id
 * @property string $subitem_name
 * @property string $maincusine_id
 * @property string $item_description
 */
class CusineSubitems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cusine_subitems';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subitem_name'], 'required'],
            [['subitem_name'], 'string', 'max' => 500],
            [['maincusine_id'], 'string', 'max' => 100],
            [['item_description'], 'string', 'max' => 5000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subitem_name' => 'Subitem Name',
            'maincusine_id' => 'Maincusine ID',
            'item_description' => 'Item Description',
        ];
    }
}
