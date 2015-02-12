<?php

/**
 * This is the model class for table "payment_record".
 *
 * The followings are the available columns in table 'payment_record':
 * @property integer $id
 * @property integer $total_amount
 * @property string $payment_date
 * @property integer $payment_confirmation
 * @property integer $Patient_Record_id
 * @property integer $Prescription_Record_id
 *
 * The followings are the available model relations:
 * @property PatientHistoryRecord[] $patientHistoryRecords
 * @property PatientRecord $patientRecord
 * @property PrescriptionRecord $prescriptionRecord
 */
class PaymentRecord extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'payment_record';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('total_amount, payment_date, payment_confirmation, Patient_Record_id, Prescription_Record_id', 'required'),
			array('total_amount, payment_confirmation, Patient_Record_id, Prescription_Record_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, total_amount, payment_date, payment_confirmation, Patient_Record_id, Prescription_Record_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'patientHistoryRecords' => array(self::HAS_MANY, 'PatientHistoryRecord', 'Payment_Record_id'),
			'patientRecord' => array(self::BELONGS_TO, 'PatientRecord', 'Patient_Record_id'),
			'prescriptionRecord' => array(self::BELONGS_TO, 'PrescriptionRecord', 'Prescription_Record_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'total_amount' => 'Total Amount',
			'payment_date' => 'Payment Date',
			'payment_confirmation' => 'Payment Confirmation',
			'Patient_Record_id' => 'Patient Record',
			'Prescription_Record_id' => 'Prescription Record',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('total_amount',$this->total_amount);
		$criteria->compare('payment_date',$this->payment_date,true);
		$criteria->compare('payment_confirmation',$this->payment_confirmation);
		$criteria->compare('Patient_Record_id',$this->Patient_Record_id);
		$criteria->compare('Prescription_Record_id',$this->Prescription_Record_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PaymentRecord the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
