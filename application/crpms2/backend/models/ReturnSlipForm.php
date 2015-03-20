<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "return_slip_form".
 *
 * @property integer $id
 * @property string $patient_last_name
 * @property string $patient_first_name
 * @property string $patient_middle_initial
 * @property string $date
 * @property integer $ward_id
 * @property integer $bed_number_id
 * @property integer $accounting_status_id
 * @property string $returned_by
 * @property string $received_by
 * @property string $approved_by
 * @property integer $user_id
 *
 * @property Ward $ward
 * @property BedNumber $bedNumber
 * @property AccountingStatus $accountingStatus
 */
class ReturnSlipForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'return_slip_form';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'patient_last_name', 'patient_first_name', 'date', 'ward_id', 'bed_number_id', 'accounting_status_id', 'returned_by', 'received_by', 'approved_by', 'user_id'], 'required'],
            [['id', 'ward_id', 'bed_number_id', 'accounting_status_id', 'user_id'], 'integer'],
            [['date'], 'safe'],
            [['patient_last_name', 'patient_first_name', 'patient_middle_initial', 'returned_by', 'received_by', 'approved_by'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patient_last_name' => 'Patient Last Name',
            'patient_first_name' => 'Patient First Name',
            'patient_middle_initial' => 'Patient Middle Initial',
            'date' => 'Date',
            'ward_id' => 'Ward ID',
            'bed_number_id' => 'Bed Number ID',
            'accounting_status_id' => 'Accounting Status ID',
            'returned_by' => 'Returned By',
            'received_by' => 'Received By',
            'approved_by' => 'Approved By',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWard()
    {
        return $this->hasOne(Ward::className(), ['id' => 'ward_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBedNumber()
    {
        return $this->hasOne(BedNumber::className(), ['id' => 'bed_number_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountingStatus()
    {
        return $this->hasOne(AccountingStatus::className(), ['id' => 'accounting_status_id']);
    }
}
