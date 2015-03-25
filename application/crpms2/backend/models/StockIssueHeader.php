<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stock_issue_header".
 *
 * @property integer $id
 * @property integer $header_code
 * @property string $date_created
 * @property integer $item_id
 * @property integer $quantity
 * @property string $exp_date
 * @property string $unit_cost
 * @property string $amount
 * @property string $remarks
 * @property integer $stock_issue_details_id
 *
 * @property Item $item
 * @property StockIssueDetails $stockIssueDetails
 */
class StockIssueHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stock_issue_header';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['header_code', 'date_created', 'item_id', 'quantity', 'exp_date', 'unit_cost', 'amount', 'remarks', 'stock_issue_details_id'], 'required'],
            [['header_code', 'item_id', 'quantity', 'stock_issue_details_id'], 'integer'],
            [['date_created', 'exp_date'], 'safe'],
            [['unit_cost', 'amount'], 'number'],
            [['remarks'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'header_code' => 'Header Code',
            'date_created' => 'Date Created',
            'item_id' => 'Item ID',
            'quantity' => 'Quantity',
            'exp_date' => 'Exp Date',
            'unit_cost' => 'Unit Cost',
            'amount' => 'Amount',
            'remarks' => 'Remarks',
            'stock_issue_details_id' => 'Stock Issue Details ID',
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
    public function getStockIssueDetails()
    {
        return $this->hasOne(StockIssueDetails::className(), ['id' => 'stock_issue_details_id']);
    }
}
