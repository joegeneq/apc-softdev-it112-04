<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "about_medicine".
 *
 * @property integer $id
 * @property string $description
 * @property string $manufacturer
 * @property integer $stocks_record_item_id
 *
 * @property StocksRecordItem $stocksRecordItem
 */
class AboutMedicine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about_medicine';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'manufacturer', 'stocks_record_item_id'], 'required'],
            [['description'], 'string'],
            [['stocks_record_item_id'], 'integer'],
            [['manufacturer'], 'string', 'max' => 30]
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
            'manufacturer' => 'Manufacturer',
            'stocks_record_item_id' => 'Stocks Record Item ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStocksRecordItem()
    {
        return $this->hasOne(StocksRecordItem::className(), ['id' => 'stocks_record_item_id']);
    }
}
