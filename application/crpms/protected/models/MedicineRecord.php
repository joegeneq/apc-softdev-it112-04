<?php

/**
 * This is the model class for table "medicine_record".
 *
 * The followings are the available columns in table 'medicine_record':
 * @property integer $id
 * @property string $medicine_name
 * @property string $Medicine_expiration_date
 * @property integer $medicine_price
 * @property string $medicine_type
 * @property string $medicine_manufacturer
 *
 * The followings are the available model relations:
 * @property InventoryRecord[] $inventoryRecords
 * @property MedicineLocation[] $medicineLocations
 * @property PrescriptionRecord[] $prescriptionRecords
 */
class MedicineRecord extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'medicine_record';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('medicine_name, Medicine_expiration_date, medicine_price, medicine_type, medicine_manufacturer', 'required'),
			array('medicine_price', 'numerical', 'integerOnly'=>true),
			array('medicine_name, medicine_type, medicine_manufacturer', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, medicine_name, Medicine_expiration_date, medicine_price, medicine_type, medicine_manufacturer', 'safe', 'on'=>'search'),
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
			'inventoryRecords' => array(self::HAS_MANY, 'InventoryRecord', 'Medicine_Record_id'),
			'medicineLocations' => array(self::HAS_MANY, 'MedicineLocation', 'medicine_record_id'),
			'prescriptionRecords' => array(self::HAS_MANY, 'PrescriptionRecord', 'Medicine_Record_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'medicine_name' => 'Medicine Name',
			'Medicine_expiration_date' => 'Medicine Expiration Date',
			'medicine_price' => 'Medicine Price',
			'medicine_type' => 'Medicine Type',
			'medicine_manufacturer' => 'Medicine Manufacturer',
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
		$criteria->compare('medicine_name',$this->medicine_name,true);
		$criteria->compare('Medicine_expiration_date',$this->Medicine_expiration_date,true);
		$criteria->compare('medicine_price',$this->medicine_price);
		$criteria->compare('medicine_type',$this->medicine_type,true);
		$criteria->compare('medicine_manufacturer',$this->medicine_manufacturer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MedicineRecord the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
