<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "maincusine".
 *
 * @property integer $id
 * @property string $cusinename
 */
class Maincusine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'maincusine';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cusinename'], 'required'],
            [['cusinename'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cusinename' => 'Cusinename',
        ];
    }
}
