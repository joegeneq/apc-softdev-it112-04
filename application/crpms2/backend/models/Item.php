<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property integer $id
 * @property string $item_code
 * @property string $item_name
 * @property string $description_item
 * @property integer $item_category_id
 *
 * @property ItemCategory $itemCategory
 * @property StockInventory[] $stockInventories
 * @property StockIssueHeader[] $stockIssueHeaders
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_code', 'item_name', 'description_item', 'item_category_id'], 'required'],
            [['description_item'], 'string'],
            [['item_category_id'], 'integer'],
            [['item_code'], 'string', 'max' => 5],
            [['item_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_code' => 'Item Code',
            'item_name' => 'Item Name',
            'description_item' => 'Description Item',
            'item_category_id' => 'Item Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItemCategory()
    {
        return $this->hasOne(ItemCategory::className(), ['id' => 'item_category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockInventories()
    {
        return $this->hasMany(StockInventory::className(), ['item_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockIssueHeaders()
    {
        return $this->hasMany(StockIssueHeader::className(), ['item_id' => 'id']);
    }
}
