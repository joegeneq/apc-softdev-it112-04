<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "unit_of_measure".
 *
 * @property integer $id
 * @property integer $type_of_measure
 * @property integer $description
 */
class UnitOfMeasure extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'unit_of_measure';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_of_measure'], 'required'],
            [['type_of_measure', 'description'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_of_measure' => 'Type Of Measure',
            'description' => 'Description',
        ];
    }
}
