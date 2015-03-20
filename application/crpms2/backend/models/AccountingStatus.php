<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "accounting_status".
 *
 * @property integer $id
 * @property string $description
 *
 * @property ReturnSlipForm[] $returnSlipForms
 */
class AccountingStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accounting_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'description'], 'required'],
            [['id'], 'integer'],
            [['description'], 'string', 'max' => 25]
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
        return $this->hasMany(ReturnSlipForm::className(), ['accounting_status_id' => 'id']);
    }
}
