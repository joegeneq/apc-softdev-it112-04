<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stock_issue_details".
 *
 * @property integer $id
 * @property integer $stock_issue_header_id
 * @property string $date_release
 * @property integer $item_id
 * @property integer $quantity
 * @property string $exp_date
 * @property string $unit_cost
 * @property string $amount
 * @property string $remarks
 * @property string $date_created
 * @property integer $created_by
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
            [['stock_issue_header_id', 'date_release', 'item_id', 'quantity', 'exp_date', 'unit_cost', 'amount', 'created_by'], 'required'],
            [['stock_issue_header_id', 'item_id', 'quantity', 'created_by'], 'integer'],
            [['date_release', 'exp_date', 'date_created'], 'safe'],
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
            'stock_issue_header_id' => 'Stock Issue Header ID',
            'date_release' => 'Date Release',
            'item_id' => 'Item ID',
            'quantity' => 'Quantity',
            'exp_date' => 'Exp Date',
            'unit_cost' => 'Unit Cost',
            'amount' => 'Amount',
            'remarks' => 'Remarks',
            'date_created' => 'Date Created',
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
    public function getStockIssueHeader()
    {
        return $this->hasOne(StockIssueHeader::className(), ['id' => 'stock_issue_header_id']);
    }
}
