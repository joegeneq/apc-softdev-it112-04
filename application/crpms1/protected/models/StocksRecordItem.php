<?php

/**
 * This is the model class for table "stocks_record_item".
 *
 * The followings are the available columns in table 'stocks_record_item':
 * @property integer $id
 * @property string $item_name
 * @property integer $available_quantity
 * @property integer $released_quantity
 * @property string $delivery_date
 * @property integer $purchasing_status
 * @property string $remarks
 * @property integer $stocks_record_id
 *
 * The followings are the available model relations:
 * @property StocksRecord $stocksRecord
 */
class StocksRecordItem extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stocks_record_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_name, available_quantity, released_quantity, delivery_date, purchasing_status, stocks_record_id', 'required'),
			array('available_quantity, released_quantity, purchasing_status, stocks_record_id', 'numerical', 'integerOnly'=>true),
			array('item_name, remarks', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, item_name, available_quantity, released_quantity, delivery_date, purchasing_status, remarks, stocks_record_id', 'safe', 'on'=>'search'),
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
			'stocksRecord' => array(self::BELONGS_TO, 'StocksRecord', 'stocks_record_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'item_name' => 'Item Name',
			'available_quantity' => 'Available Quantity',
			'released_quantity' => 'Released Quantity',
			'delivery_date' => 'Delivery Date',
			'purchasing_status' => 'Purchasing Status',
			'remarks' => 'Remarks',
			'stocks_record_id' => 'Stocks Record',
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
		$criteria->compare('item_name',$this->item_name,true);
		$criteria->compare('available_quantity',$this->available_quantity);
		$criteria->compare('released_quantity',$this->released_quantity);
		$criteria->compare('delivery_date',$this->delivery_date,true);
		$criteria->compare('purchasing_status',$this->purchasing_status);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('stocks_record_id',$this->stocks_record_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StocksRecordItem the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
