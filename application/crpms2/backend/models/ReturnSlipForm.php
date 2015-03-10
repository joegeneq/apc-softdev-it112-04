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
 * @property string $ward_name
 * @property string $bed_number
 * @property string $returned_by
 * @property string $received_by
 * @property string $approved_by
 * @property integer $accounting_status
 * @property integer $user_id
 *
 * @property ReturnItem[] $returnItems
 * @property User $user
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
            [['id', 'patient_last_name', 'patient_first_name', 'date', 'ward_name', 'bed_number', 'returned_by', 'received_by', 'approved_by', 'accounting_status', 'user_id'], 'required'],
            [['id', 'accounting_status', 'user_id'], 'integer'],
            [['date'], 'safe'],
            [['patient_last_name', 'patient_first_name', 'patient_middle_initial', 'ward_name', 'bed_number', 'returned_by', 'received_by', 'approved_by'], 'string', 'max' => 45]
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
            'ward_name' => 'Ward Name',
            'bed_number' => 'Bed Number',
            'returned_by' => 'Returned By',
            'received_by' => 'Received By',
            'approved_by' => 'Approved By',
            'accounting_status' => 'Accounting Status',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReturnItems()
    {
        return $this->hasMany(ReturnItem::className(), ['return_slip_form_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
