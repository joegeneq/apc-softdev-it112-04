<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stock_inventory".
 *
 * @property integer $id
 * @property string $stock_inventory_id
 * @property integer $quantity_onhand
 * @property integer $quantity_onorder
 * @property integer $item_id
 * @property integer $location_id
 * @property string $created
 *
 * @property Item $item
 * @property Location $location
 * @property StockIssueDetails[] $stockIssueDetails
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
            [['stock_inventory_id', 'quantity_onhand', 'quantity_onorder', 'location_id'], 'required'],
            [['quantity_onhand', 'quantity_onorder', 'item_id', 'location_id'], 'integer'],
            [['created','item_id'], 'safe'],
            [['stock_inventory_id'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'stock_inventory_id' => 'Stock Inventory Code',
            'quantity_onhand' => 'Quantity Onhand',
            'quantity_onorder' => 'Quantity Onorder',
            'item_id' => 'Item Name',
            'location_id' => 'Location Name',
            'created' => 'Created',
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
    public function getStockIssueDetails()
    {
        return $this->hasMany(StockIssueDetails::className(), ['stock_inventory_id' => 'id']);
    }
}
