<?php

/**
 * This is the model class for table "inventory_record".
 *
 * The followings are the available columns in table 'inventory_record':
 * @property integer $id
 * @property string $delivery_Date
 * @property string $description
 * @property integer $Medicine_Record_id
 *
 * The followings are the available model relations:
 * @property MedicineRecord $medicineRecord
 * @property MedicineLocation[] $medicineLocations
 */
class InventoryRecord extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inventory_record';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('delivery_Date, description, Medicine_Record_id', 'required'),
			array('Medicine_Record_id', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, delivery_Date, description, Medicine_Record_id', 'safe', 'on'=>'search'),
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
			'medicineRecord' => array(self::BELONGS_TO, 'MedicineRecord', 'Medicine_Record_id'),
			'medicineLocations' => array(self::HAS_MANY, 'MedicineLocation', 'inventory_record_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'delivery_Date' => 'Delivery Date',
			'description' => 'Description',
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
		$criteria->compare('delivery_Date',$this->delivery_Date,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('Medicine_Record_id',$this->Medicine_Record_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InventoryRecord the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
