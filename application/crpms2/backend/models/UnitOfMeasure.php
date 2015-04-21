<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "unit_of_measure".
 *
 * @property integer $id
 * @property string $type_of_measure
 * @property string $description
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
            [['description'], 'string'],
            [['type_of_measure'], 'string', 'max' => 25]
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
