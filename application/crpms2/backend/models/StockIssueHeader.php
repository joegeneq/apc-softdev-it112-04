<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stock_issue_header".
 *
 * @property integer $id
 * @property string $stock_issue_header_code
 * @property string $date_prepared
 * @property integer $location_id
 * @property integer $stock_inventory_id
 * @property integer $stock_status_id
 * @property integer $employee_id
 * @property integer $employee_lastname
 * @property integer $employee_firstname
 * @property integer $employee_middlename
 * @property string $date_created
 * @property string $date_updated
 *
 * @property StockIssueDetails[] $stockIssueDetails
 * @property StockStatus $stockStatus
 * @property StockInventory $stockInventory
 * @property Location $location
 * @property Employee $employee
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
            [['stock_issue_header_code', 'date_prepared', 'location_id', 'stock_inventory_id', 'stock_status_id', 'employee_id', 'employee_lastname', 'employee_firstname', 'employee_middlename'], 'required'],
            [['date_prepared', 'date_created', 'date_updated'], 'safe'],
            [['location_id', 'stock_inventory_id', 'stock_status_id', 'employee_id', 'employee_lastname', 'employee_firstname', 'employee_middlename'], 'integer'],
            [['stock_issue_header_code'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'stock_issue_header_code' => 'Stock Issue Header Code',
            'date_prepared' => 'Date Prepared',
            'location_id' => 'Location ID',
            'stock_inventory_id' => 'Stock Inventory ID',
            'stock_status_id' => 'Stock Status ID',
            'employee_id' => 'Employee ID',
            'employee_lastname' => 'Employee Lastname',
            'employee_firstname' => 'Employee Firstname',
            'employee_middlename' => 'Employee Middlename',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockIssueDetails()
    {
        return $this->hasMany(StockIssueDetails::className(), ['stock_issue_header_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockStatus()
    {
        return $this->hasOne(StockStatus::className(), ['id' => 'stock_status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockInventory()
    {
        return $this->hasOne(StockInventory::className(), ['id' => 'stock_inventory_id']);
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
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_id']);
    }
}
