<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stock_inventory".
 *
 * @property integer $id
 * @property integer $item_id
 * @property integer $location_id
 * @property integer $quantity_onhand
 * @property integer $quantity_onorder
 * @property string $stock_inventory_code
 * @property string $created
 * @property integer $created_by
 *
 * @property Item $item
 * @property Location $location
 * @property StockIssueHeader[] $stockIssueHeaders
 */
class StockInventory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stock_inventory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'location_id', 'quantity_onhand', 'quantity_onorder', 'stock_inventory_code', 'created_by'], 'required'],
            [['item_id', 'location_id', 'quantity_onhand', 'quantity_onorder', 'created_by'], 'integer'],
            [['created'], 'safe'],
            [['stock_inventory_code'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_id' => 'Item Name',
            'location_id' => 'Location Name',
            'quantity_onhand' => 'Quantity Onhand',
            'quantity_onorder' => 'Quantity Onorder',
            'stock_inventory_code' => 'Stock Inventory Code',
            'created' => 'Created',
            'created_by' => 'Created By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['id' => 'item_id']);
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
        return $this->hasMany(StockIssueHeader::className(), ['stock_inventory_id' => 'id']);
    }
}
