<?php

/**
 * This is the model class for table "return_item".
 *
 * The followings are the available columns in table 'return_item':
 * @property integer $id
 * @property string $date
 * @property string $item_name
 * @property integer $quantity
 * @property string $amount
 * @property string $remarks
 * @property integer $return_slip_form_id
 *
 * The followings are the available model relations:
 * @property ReturnSlipForm $returnSlipForm
 */
class ReturnItem extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'return_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, item_name, quantity, amount, return_slip_form_id', 'required'),
			array('quantity, return_slip_form_id', 'numerical', 'integerOnly'=>true),
			array('item_name, remarks', 'length', 'max'=>45),
			array('amount', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, date, item_name, quantity, amount, remarks, return_slip_form_id', 'safe', 'on'=>'search'),
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
			'returnSlipForm' => array(self::BELONGS_TO, 'ReturnSlipForm', 'return_slip_form_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'date' => 'Date',
			'item_name' => 'Item Name',
			'quantity' => 'Quantity',
			'amount' => 'Amount',
			'remarks' => 'Remarks',
			'return_slip_form_id' => 'Return Slip Form',
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
		$criteria->compare('date',$this->date,true);
		$criteria->compare('item_name',$this->item_name,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('return_slip_form_id',$this->return_slip_form_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ReturnItem the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
