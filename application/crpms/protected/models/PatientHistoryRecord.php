<?php

/**
 * This is the model class for table "patient_history_record".
 *
 * The followings are the available columns in table 'patient_history_record':
 * @property integer $id
 * @property integer $Patient_Record_id
 * @property integer $Prescription_Record_id
 * @property integer $Payment_Record_id
 *
 * The followings are the available model relations:
 * @property PatientRecord $patientRecord
 * @property PaymentRecord $paymentRecord
 * @property PrescriptionRecord $prescriptionRecord
 */
class PatientHistoryRecord extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'patient_history_record';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, Patient_Record_id, Prescription_Record_id, Payment_Record_id', 'required'),
			array('id, Patient_Record_id, Prescription_Record_id, Payment_Record_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Patient_Record_id, Prescription_Record_id, Payment_Record_id', 'safe', 'on'=>'search'),
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
			'patientRecord' => array(self::BELONGS_TO, 'PatientRecord', 'Patient_Record_id'),
			'paymentRecord' => array(self::BELONGS_TO, 'PaymentRecord', 'Payment_Record_id'),
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
			'Patient_Record_id' => 'Patient Record',
			'Prescription_Record_id' => 'Prescription Record',
			'Payment_Record_id' => 'Payment Record',
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
		$criteria->compare('Patient_Record_id',$this->Patient_Record_id);
		$criteria->compare('Prescription_Record_id',$this->Prescription_Record_id);
		$criteria->compare('Payment_Record_id',$this->Payment_Record_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PatientHistoryRecord the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
