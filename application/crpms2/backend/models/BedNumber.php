<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bed_number".
 *
 * @property integer $id
 * @property integer $description
 *
 * @property ReturnSlipForm[] $returnSlipForms
 */
class BedNumber extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bed_number';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'description'], 'required'],
            [['id', 'description'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReturnSlipForms()
    {
        return $this->hasMany(ReturnSlipForm::className(), ['bed_number_id' => 'id']);
    }
}
