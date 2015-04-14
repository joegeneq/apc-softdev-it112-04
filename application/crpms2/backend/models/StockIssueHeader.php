<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stock_issue_header".
 *
 * @property integer $id
 * @property integer $location_id
 * @property integer $stock_inventory_id
 * @property string $header_code
 * @property string $stock_issue_code
 * @property integer $stock_status_id
 * @property integer $employee_id
 * @property string $issue_from
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
            [['id', 'location_id', 'stock_inventory_id', 'header_code', 'stock_issue_code', 'stock_status_id', 'employee_id'], 'required'],
            [['id', 'location_id', 'stock_inventory_id', 'stock_status_id', 'employee_id'], 'integer'],
            [['header_code', 'stock_issue_code'], 'string', 'max' => 20],
            [['issue_from'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'location_id' => 'Location ID',
            'stock_inventory_id' => 'Stock Inventory ID',
            'header_code' => 'Header Code',
            'stock_issue_code' => 'Stock Issue Code',
            'stock_status_id' => 'Stock Status ID',
            'employee_id' => 'Employee ID',
            'issue_from' => 'Issue From',
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
