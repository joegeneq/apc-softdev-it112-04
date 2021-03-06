<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "return_item_details".
 *
 * @property integer $id
 * @property integer $return_item_header_id
 * @property integer $item_id
 * @property integer $quantity
 * @property string $unit_cost
 * @property string $amount
 * @property string $date_created
 * @property integer $created_by
 *
 * @property ReturnItemHeader $returnItemHeader
 * @property Item $item
 */
class ReturnItemDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'return_item_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['return_item_header_id', 'item_id', 'quantity', 'unit_cost', 'amount', 'created_by'], 'required'],
            [['return_item_header_id', 'item_id', 'quantity', 'created_by'], 'integer'],
            [['unit_cost', 'amount'], 'number'],
            [['date_created'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'return_item_header_id' => 'Return Item Header ID',
            'item_id' => 'Item ID',
            'quantity' => 'Quantity',
            'unit_cost' => 'Unit Cost',
            'amount' => 'Amount',
            'date_created' => 'Date Created',
            'created_by' => 'Created By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReturnItemHeader()
    {
        return $this->hasOne(ReturnItemHeader::className(), ['id' => 'return_item_header_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['id' => 'item_id']);
    }
}
