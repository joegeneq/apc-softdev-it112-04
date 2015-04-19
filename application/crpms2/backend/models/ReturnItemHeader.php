<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "return_item_header".
 *
 * @property integer $id
 * @property string $return_item_header_code
 * @property integer $date_prepared
 * @property integer $patient_id
 * @property integer $location_id
 * @property integer $bed_id
 * @property string $total_amount
 * @property integer $employee_id
 * @property integer $employee_lastname
 * @property integer $employee_firstname
 * @property integer $employee_middlename
 * @property integer $accounting_status_id
 * @property string $date_created
 * @property string $date_updated
 *
 * @property ReturnItemDetails[] $returnItemDetails
 * @property Location $location
 * @property Employee $employee
 * @property Employee $employeeLastname
 * @property Employee $employeeFirstname
 * @property Employee $employeeMiddlename
 * @property AccountingStatus $accountingStatus
 * @property Bed $bed
 * @property Patient $patient
 */
class ReturnItemHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'return_item_header';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['return_item_header_code', 'date_prepared', 'patient_id', 'location_id', 'bed_id', 'total_amount', 'employee_id', 'employee_lastname', 'employee_firstname', 'employee_middlename', 'accounting_status_id'], 'required'],
            [['date_prepared', 'patient_id', 'location_id', 'bed_id', 'employee_id', 'employee_lastname', 'employee_firstname', 'employee_middlename', 'accounting_status_id'], 'integer'],
            [['total_amount'], 'number'],
            [['date_created', 'date_updated'], 'safe'],
            [['return_item_header_code'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'return_item_header_code' => 'Return Item Header Code',
            'date_prepared' => 'Date Prepared',
            'patient_id' => 'Patient ID',
            'location_id' => 'Location ID',
            'bed_id' => 'Bed ID',
            'total_amount' => 'Total Amount',
            'employee_id' => 'Employee ID',
            'employee_lastname' => 'Employee Lastname',
            'employee_firstname' => 'Employee Firstname',
            'employee_middlename' => 'Employee Middlename',
            'accounting_status_id' => 'Accounting Status ID',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReturnItemDetails()
    {
        return $this->hasMany(ReturnItemDetails::className(), ['return_item_header_id' => 'id']);
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployeeLastname()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_lastname']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployeeFirstname()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_firstname']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployeeMiddlename()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_middlename']);
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
    public function getBed()
    {
        return $this->hasOne(Bed::className(), ['id' => 'bed_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(Patient::className(), ['id' => 'patient_id']);
    }
}
