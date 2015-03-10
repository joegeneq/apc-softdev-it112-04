<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "return_item".
 *
 * @property integer $id
 * @property string $date
 * @property string $item_name
 * @property integer $quantity
 * @property string $amount
 * @property string $remarks
 * @property integer $return_slip_form_id
 */
class ReturnItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'return_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'item_name', 'quantity', 'amount', 'return_slip_form_id'], 'required'],
            [['date'], 'safe'],
            [['quantity', 'return_slip_form_id'], 'integer'],
            [['amount'], 'number'],
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
            'amount' => 'Amount',
            'remarks' => 'Remarks',
            'return_slip_form_id' => 'Return Slip Form ID',
        ];
    }
}
