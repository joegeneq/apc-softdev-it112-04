<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stocks_record_item".
 *
 * @property integer $id
 * @property string $medicine_name
 * @property integer $available_quantity
 * @property integer $released_quantity
 * @property string $delivery_date
 * @property string $remarks
 * @property integer $purchasing_status_id
 * @property integer $stocks_record_id
 *
 * @property AboutMedicine[] $aboutMedicines
 * @property PurchasingStatus $purchasingStatus
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
            [['medicine_name', 'available_quantity', 'released_quantity', 'delivery_date', 'purchasing_status_id', 'stocks_record_id'], 'required'],
            [['available_quantity', 'released_quantity', 'purchasing_status_id', 'stocks_record_id'], 'integer'],
            [['delivery_date'], 'safe'],
            [['medicine_name', 'remarks'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'medicine_name' => 'Medicine Name',
            'available_quantity' => 'Available Quantity',
            'released_quantity' => 'Released Quantity',
            'delivery_date' => 'Delivery Date',
            'remarks' => 'Remarks',
            'purchasing_status_id' => 'Purchasing Status ID',
            'stocks_record_id' => 'Stocks Record ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAboutMedicines()
    {
        return $this->hasMany(AboutMedicine::className(), ['stocks_record_item_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPurchasingStatus()
    {
        return $this->hasOne(PurchasingStatus::className(), ['id' => 'purchasing_status_id']);
    }
}
