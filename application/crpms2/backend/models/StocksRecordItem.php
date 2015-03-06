<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stocks_record_item".
 *
 * @property integer $id
 * @property string $item_name
 * @property integer $available_quantity
 * @property integer $released_quantity
 * @property string $delivery_date
 * @property integer $purchasing_status
 * @property string $remarks
 * @property integer $stocks_record_id
 *
 * @property StocksRecord $stocksRecord
 */
class StocksRecordItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stocks_record_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'item_name', 'available_quantity', 'released_quantity', 'delivery_date', 'purchasing_status', 'stocks_record_id'], 'required'],
            [['id', 'available_quantity', 'released_quantity', 'purchasing_status', 'stocks_record_id'], 'integer'],
            [['delivery_date'], 'safe'],
            [['item_name', 'remarks'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_name' => 'Item Name',
            'available_quantity' => 'Available Quantity',
            'released_quantity' => 'Released Quantity',
            'delivery_date' => 'Delivery Date',
            'purchasing_status' => 'Purchasing Status',
            'remarks' => 'Remarks',
            'stocks_record_id' => 'Stocks Record ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStocksRecord()
    {
        return $this->hasOne(StocksRecord::className(), ['id' => 'stocks_record_id']);
    }
}
