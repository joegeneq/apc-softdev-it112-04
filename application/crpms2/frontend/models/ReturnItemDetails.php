<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "return_item_details".
 *
 * @property integer $id
 * @property string $return_item_details_code
 * @property integer $location_id
 * @property integer $return_item_header_id
 * @property integer $accounting_status_id
 * @property integer $employee_id
 * @property string $return_to
 * @property string $created_at
 *
 * @property ReturnItemHeader $returnItemHeader
 * @property Location $location
 * @property AccountingStatus $accountingStatus
 * @property Employee $employee
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
            [['return_item_details_code', 'location_id', 'return_item_header_id', 'accounting_status_id', 'employee_id'], 'required'],
            [['location_id', 'return_item_header_id', 'accounting_status_id', 'employee_id'], 'integer'],
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
    public function getReturnItemHeader()
    {
        return $this->hasOne(ReturnItemHeader::className(), ['id' => 'return_item_header_id']);
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
    public function getAccountingStatus()
    {
        return $this->hasOne(AccountingStatus::className(), ['id' => 'accounting_status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_id']);
    }
}
