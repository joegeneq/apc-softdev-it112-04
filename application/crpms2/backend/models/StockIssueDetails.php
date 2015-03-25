<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stock_issue_details".
 *
 * @property integer $id
 * @property integer $location_id
 * @property integer $stock_inventory_id
 * @property integer $stock_issue_code
 * @property integer $stock_status_id
 *
 * @property StockStatus $stockStatus
 * @property StockInventory $stockInventory
 * @property Location $location
 * @property StockIssueHeader[] $stockIssueHeaders
 */
class StockIssueDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stock_issue_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['location_id', 'stock_inventory_id', 'stock_issue_code', 'stock_status_id'], 'required'],
            [['location_id', 'stock_inventory_id', 'stock_issue_code', 'stock_status_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'location_id' => 'Location ID',
            'stock_inventory_id' => 'Stock Inventory ID',
            'stock_issue_code' => 'Stock Issue Code',
            'stock_status_id' => 'Stock Status ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockStatus()
    {
        return $this->hasOne(StockStatus::className(), ['id' => 'stock_status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockInventory()
    {
        return $this->hasOne(StockInventory::className(), ['id' => 'stock_inventory_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocation()
    {
        return $this->hasOne(Location::className(), ['id' => 'location_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockIssueHeaders()
    {
        return $this->hasMany(StockIssueHeader::className(), ['stock_issue_details_id' => 'id']);
    }
}
