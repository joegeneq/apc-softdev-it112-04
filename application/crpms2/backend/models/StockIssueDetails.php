<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stock_issue_details".
 *
 * @property integer $id
 * @property string $stock_issue_code
 * @property string $date_created
 * @property integer $item_id
 * @property integer $quantity
 * @property string $exp_date
 * @property string $unit_cost
 * @property string $amount
 * @property string $remarks
 * @property integer $stock_issue_header_id
 *
 * @property Item $item
 * @property StockIssueHeader $stockIssueHeader
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
            [['stock_issue_code', 'item_id', 'quantity', 'exp_date', 'unit_cost', 'amount', 'stock_issue_header_id'], 'required'],
            [['date_created', 'exp_date'], 'safe'],
            [['item_id', 'quantity', 'stock_issue_header_id'], 'integer'],
            [['unit_cost', 'amount'], 'number'],
            [['remarks'], 'string'],
            [['stock_issue_code'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'stock_issue_code' => 'Stock Issue Code',
            'date_created' => 'Date Created',
            'item_id' => 'Item Name',
            'quantity' => 'Quantity',
            'exp_date' => 'Expiration Date',
            'unit_cost' => 'Unit Cost',
            'amount' => 'Amount',
            'remarks' => 'Remarks',
            'stock_issue_header_id' => 'Stock Issue Header Code',
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
    public function getStockIssueHeader()
    {
        return $this->hasOne(StockIssueHeader::className(), ['id' => 'stock_issue_header_id']);
    }
}
