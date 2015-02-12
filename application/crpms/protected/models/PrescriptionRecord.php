<?php

/**
 * This is the model class for table "prescription_record".
 *
 * The followings are the available columns in table 'prescription_record':
 * @property integer $id
 * @property integer $Prescription_quantity
 * @property integer $Medicine_Record_id
 *
 * The followings are the available model relations:
 * @property PatientHistoryRecord[] $patientHistoryRecords
 * @property PaymentRecord[] $paymentRecords
 * @property MedicineRecord $medicineRecord
 */
class PrescriptionRecord extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'prescription_record';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, Prescription_quantity, Medicine_Record_id', 'required'),
			array('id, Prescription_quantity, Medicine_Record_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Prescription_quantity, Medicine_Record_id', 'safe', 'on'=>'search'),
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
			'patientHistoryRecords' => array(self::HAS_MANY, 'PatientHistoryRecord', 'Prescription_Record_id'),
			'paymentRecords' => array(self::HAS_MANY, 'PaymentRecord', 'Prescription_Record_id'),
			'medicineRecord' => array(self::BELONGS_TO, 'MedicineRecord', 'Medicine_Record_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Prescription_quantity' => 'Prescription Quantity',
			'Medicine_Record_id' => 'Medicine Record',
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
		$criteria->compare('Prescription_quantity',$this->Prescription_quantity);
		$criteria->compare('Medicine_Record_id',$this->Medicine_Record_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PrescriptionRecord the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
