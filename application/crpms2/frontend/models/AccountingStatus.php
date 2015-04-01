<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "accounting_status".
 *
 * @property integer $id
 * @property string $status_code
 * @property string $description
 *
 * @property ReturnItemDetails[] $returnItemDetails
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
            [['status_code', 'description'], 'required'],
            [['status_code', 'description'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status_code' => 'Status Code',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReturnItemDetails()
    {
        return $this->hasMany(ReturnItemDetails::className(), ['accounting_status_id' => 'id']);
    }
}
