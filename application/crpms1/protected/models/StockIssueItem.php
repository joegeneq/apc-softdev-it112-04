<?php

/**
 * This is the model class for table "stock_issue_item".
 *
 * The followings are the available columns in table 'stock_issue_item':
 * @property integer $id
 * @property string $date
 * @property string $item_name
 * @property integer $quantity
 * @property string $expiration_date
 * @property integer $unit_cost
 * @property integer $amount
 * @property string $remarks
 * @property integer $stock_issue_form_id
 *
 * The followings are the available model relations:
 * @property StockIssueForm $stockIssueForm
 */
class StockIssueItem extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stock_issue_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, item_name, quantity, expiration_date, unit_cost, amount, stock_issue_form_id', 'required'),
			array('quantity, unit_cost, amount, stock_issue_form_id', 'numerical', 'integerOnly'=>true),
			array('item_name, remarks', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, date, item_name, quantity, expiration_date, unit_cost, amount, remarks, stock_issue_form_id', 'safe', 'on'=>'search'),
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
			'stockIssueForm' => array(self::BELONGS_TO, 'StockIssueForm', 'stock_issue_form_id'),
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
			'expiration_date' => 'Expiration Date',
			'unit_cost' => 'Unit Cost',
			'amount' => 'Amount',
			'remarks' => 'Remarks',
			'stock_issue_form_id' => 'Stock Issue Form',
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
		$criteria->compare('expiration_date',$this->expiration_date,true);
		$criteria->compare('unit_cost',$this->unit_cost);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('stock_issue_form_id',$this->stock_issue_form_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StockIssueItem the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
