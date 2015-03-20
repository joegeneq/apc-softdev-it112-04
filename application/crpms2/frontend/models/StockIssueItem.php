<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "stock_issue_item".
 *
 * @property integer $id
 * @property string $date
 * @property string $item_name
 * @property integer $quantity
 * @property string $expiration_date
 * @property integer $unit_cost
 * @property integer $amount
 * @property string $remarks
 * @property integer $stock_issue_form_id
 */
class StockIssueItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stock_issue_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'item_name', 'quantity', 'expiration_date', 'unit_cost', 'amount', 'stock_issue_form_id'], 'required'],
            [['date', 'expiration_date'], 'safe'],
            [['quantity', 'unit_cost', 'amount', 'stock_issue_form_id'], 'integer'],
            [['item_name', 'remarks'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'item_name' => 'Item Name',
            'quantity' => 'Quantity',
            'expiration_date' => 'Expiration Date',
            'unit_cost' => 'Unit Cost',
            'amount' => 'Amount',
            'remarks' => 'Remarks',
            'stock_issue_form_id' => 'Stock Issue Form ID',
        ];
    }
}
