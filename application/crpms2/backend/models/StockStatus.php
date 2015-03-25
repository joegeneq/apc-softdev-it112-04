<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stock_status".
 *
 * @property integer $id
 * @property string $status_code
 * @property string $description_name
 *
 * @property StockIssueDetails[] $stockIssueDetails
 */
class StockStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stock_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status_code', 'description_name'], 'required'],
            [['status_code', 'description_name'], 'string', 'max' => 20]
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
            'description_name' => 'Description Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockIssueDetails()
    {
        return $this->hasMany(StockIssueDetails::className(), ['stock_status_id' => 'id']);
    }
}
