<?php

/**
 * This is the model class for table "medicine_location".
 *
 * The followings are the available columns in table 'medicine_location':
 * @property integer $id
 * @property string $cabinet_number
 * @property string $description
 * @property integer $quantity_in_stocks
 * @property integer $medicine_record_id
 * @property integer $inventory_record_id
 *
 * The followings are the available model relations:
 * @property InventoryRecord $inventoryRecord
 * @property MedicineRecord $medicineRecord
 */
class MedicineLocation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'medicine_location';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cabinet_number, description, quantity_in_stocks, medicine_record_id, inventory_record_id', 'required'),
			array('quantity_in_stocks, medicine_record_id, inventory_record_id', 'numerical', 'integerOnly'=>true),
			array('cabinet_number, description', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cabinet_number, description, quantity_in_stocks, medicine_record_id, inventory_record_id', 'safe', 'on'=>'search'),
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
			'inventoryRecord' => array(self::BELONGS_TO, 'InventoryRecord', 'inventory_record_id'),
			'medicineRecord' => array(self::BELONGS_TO, 'MedicineRecord', 'medicine_record_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cabinet_number' => 'Cabinet Number',
			'description' => 'Description',
			'quantity_in_stocks' => 'Quantity In Stocks',
			'medicine_record_id' => 'Medicine Record',
			'inventory_record_id' => 'Inventory Record',
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
		$criteria->compare('cabinet_number',$this->cabinet_number,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('quantity_in_stocks',$this->quantity_in_stocks);
		$criteria->compare('medicine_record_id',$this->medicine_record_id);
		$criteria->compare('inventory_record_id',$this->inventory_record_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MedicineLocation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
