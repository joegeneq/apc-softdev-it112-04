<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property integer $id
 * @property string $item_code
 * @property string $item_name
 * @property integer $item_category_id
 * @property integer $manufacturer_id
 * @property integer $generic_name_id
 * @property integer $minimum_reorder_quantity
 * @property string $remarks
 * @property string $date_created
 * @property string $date_updated
 *
 * @property GenericName $genericName
 * @property Manufacturer $manufacturer
 * @property ReturnItemDetails[] $returnItemDetails
 * @property StockIssueDetails[] $stockIssueDetails
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
            [['item_code', 'item_name', 'item_category_id', 'manufacturer_id', 'generic_name_id', 'minimum_reorder_quantity'], 'required'],
            [['item_category_id', 'manufacturer_id', 'generic_name_id', 'minimum_reorder_quantity'], 'integer'],
            [['remarks'], 'string'],
            [['date_created', 'date_updated'], 'safe'],
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
            'item_category_id' => 'Item Category ID',
            'manufacturer_id' => 'Manufacturer ID',
            'generic_name_id' => 'Generic Name ID',
            'minimum_reorder_quantity' => 'Minimum Reorder Quantity',
            'remarks' => 'Remarks',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenericName()
    {
        return $this->hasOne(GenericName::className(), ['id' => 'generic_name_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManufacturer()
    {
        return $this->hasOne(Manufacturer::className(), ['id' => 'manufacturer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReturnItemDetails()
    {
        return $this->hasMany(ReturnItemDetails::className(), ['item_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockIssueDetails()
    {
        return $this->hasMany(StockIssueDetails::className(), ['item_id' => 'id']);
    }
}
