<?php

/**
 * This is the model class for table "patient_record".
 *
 * The followings are the available columns in table 'patient_record':
 * @property integer $id
 * @property string $patient_lastname
 * @property string $Patient_firstname
 * @property string $patient_middle_inital
 * @property string $patient_contact_number
 * @property string $Patient_address
 * @property string $Patient_birthdatel
 *
 * The followings are the available model relations:
 * @property PatientHistoryRecord[] $patientHistoryRecords
 * @property PaymentRecord[] $paymentRecords
 */
class PatientRecord extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'patient_record';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('patient_lastname, Patient_firstname, patient_middle_inital, patient_contact_number, Patient_address, Patient_birthdatel', 'required'),
			array('patient_lastname, Patient_firstname', 'length', 'max'=>45),
			array('patient_middle_inital', 'length', 'max'=>1),
			array('patient_contact_number', 'length', 'max'=>20),
			array('Patient_address', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, patient_lastname, Patient_firstname, patient_middle_inital, patient_contact_number, Patient_address, Patient_birthdatel', 'safe', 'on'=>'search'),
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
			'patientHistoryRecords' => array(self::HAS_MANY, 'PatientHistoryRecord', 'Patient_Record_id'),
			'paymentRecords' => array(self::HAS_MANY, 'PaymentRecord', 'Patient_Record_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'patient_lastname' => 'Patient Lastname',
			'Patient_firstname' => 'Patient Firstname',
			'patient_middle_inital' => 'Patient Middle Inital',
			'patient_contact_number' => 'Patient Contact Number',
			'Patient_address' => 'Patient Address',
			'Patient_birthdatel' => 'Patient Birthdatel',
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
		$criteria->compare('patient_lastname',$this->patient_lastname,true);
		$criteria->compare('Patient_firstname',$this->Patient_firstname,true);
		$criteria->compare('patient_middle_inital',$this->patient_middle_inital,true);
		$criteria->compare('patient_contact_number',$this->patient_contact_number,true);
		$criteria->compare('Patient_address',$this->Patient_address,true);
		$criteria->compare('Patient_birthdatel',$this->Patient_birthdatel,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PatientRecord the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
