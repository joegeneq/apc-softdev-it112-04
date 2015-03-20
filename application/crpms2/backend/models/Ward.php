<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ward".
 *
 * @property integer $id
 * @property string $ward_name
 *
 * @property ReturnSlipForm[] $returnSlipForms
 */
class Ward extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ward';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ward_name'], 'required'],
            [['id'], 'integer'],
            [['ward_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ward_name' => 'Ward Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReturnSlipForms()
    {
        return $this->hasMany(ReturnSlipForm::className(), ['ward_id' => 'id']);
    }
}
