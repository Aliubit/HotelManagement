<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "item_quantity".
 *
 * @property integer $id
 * @property string $subitem_id
 * @property string $plate
 * @property string $price
 */
class ItemQuantity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item_quantity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subitem_id', 'plate', 'price'], 'required'],
            [['subitem_id', 'plate', 'price'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subitem_id' => 'Subitem ID',
            'plate' => 'Plate',
            'price' => 'Price',
        ];
    }
}
