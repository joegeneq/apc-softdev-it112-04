<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "return_item_details".
 *
 * @property integer $id
 * @property string $return_item_details_code
 * @property integer $item_id
 * @property integer $quantity
 * @property integer $location_id
 * @property integer $return_item_header_id
 * @property integer $accounting_status_id
 * @property integer $employee_id
 * @property string $return_to
 * @property string $created_at
 *
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
            [['return_item_details_code', 'item_id', 'quantity', 'location_id', 'return_item_header_id', 'accounting_status_id', 'employee_id'], 'required'],
            [['item_id', 'quantity', 'location_id', 'return_item_header_id', 'accounting_status_id', 'employee_id'], 'integer'],
            [['created_at'], 'safe'],
            [['return_item_details_code', 'return_to'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'return_item_details_code' => 'Return Item Details Code',
            'item_id' => 'Item ID',
            'quantity' => 'Quantity',
            'location_id' => 'Location ID',
            'return_item_header_id' => 'Return Item Header ID',
            'accounting_status_id' => 'Accounting Status ID',
            'employee_id' => 'Employee ID',
            'return_to' => 'Return To',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['id' => 'item_id']);
    }
}
