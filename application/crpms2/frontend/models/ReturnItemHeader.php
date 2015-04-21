<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "return_item_header".
 *
 * @property integer $id
 * @property string $return_item_header_code
 * @property string $date_prepared
 * @property integer $patient_id
 * @property integer $location_id
 * @property integer $bed_id
 * @property string $total_amount
 * @property integer $returned_by
 * @property integer $received_by
 * @property integer $approved_by
 * @property integer $accounting_status_id
 * @property string $date_created
 * @property string $date_updated
 * @property integer $created_by
 *
 * @property ReturnItemDetails[] $returnItemDetails
 * @property Location $location
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
            [['return_item_header_code', 'date_prepared', 'patient_id', 'location_id', 'bed_id', 'total_amount', 'returned_by', 'received_by', 'approved_by', 'accounting_status_id', 'created_by'], 'required'],
            [['date_prepared', 'date_created', 'date_updated'], 'safe'],
            [['patient_id', 'location_id', 'bed_id', 'returned_by', 'received_by', 'approved_by', 'accounting_status_id', 'created_by'], 'integer'],
            [['total_amount'], 'number'],
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
            'returned_by' => 'Returned By',
            'received_by' => 'Received By',
            'approved_by' => 'Approved By',
            'accounting_status_id' => 'Accounting Status ID',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
            'created_by' => 'Created By',
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
