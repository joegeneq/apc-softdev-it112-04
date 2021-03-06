<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bed".
 *
 * @property integer $id
 * @property string $bed_code
 * @property integer $bed_number
 */
class Bed extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bed';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bed_code', 'bed_number'], 'required'],
            [['bed_number'], 'integer'],
            [['bed_code'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bed_code' => 'Bed Code',
            'bed_number' => 'Bed Number',
        ];
    }
}
