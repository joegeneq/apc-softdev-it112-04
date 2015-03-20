<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "purchasing_status".
 *
 * @property integer $id
 * @property string $status
 *
 * @property StocksRecordItem[] $stocksRecordItems
 */
class PurchasingStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'purchasing_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['status'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStocksRecordItems()
    {
        return $this->hasMany(StocksRecordItem::className(), ['purchasing_status_id' => 'id']);
    }
}
