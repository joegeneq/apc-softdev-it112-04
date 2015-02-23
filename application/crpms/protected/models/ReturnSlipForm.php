<?php

/**
 * This is the model class for table "return_slip_form".
 *
 * The followings are the available columns in table 'return_slip_form':
 * @property integer $id
 * @property string $patient_name
 * @property string $date
 * @property string $bed_number
 * @property string $item
 * @property string $quantity
 * @property string $amount
 * @property string $remarks
 * @property string $returned_by
 * @property string $received_by
 * @property string $approved_by
 * @property integer $accounting_status
 * @property string $ward_name
 * @property integer $account_id
 *
 * The followings are the available model relations:
 * @property Account $account
 */
class ReturnSlipForm extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'return_slip_form';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('patient_name, date, bed_number, item, quantity, amount, returned_by, received_by, approved_by, accounting_status, ward_name, account_id', 'required'),
			array('accounting_status, account_id', 'numerical', 'integerOnly'=>true),
			array('patient_name, bed_number, item, quantity, amount, remarks, returned_by, received_by, approved_by, ward_name', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, patient_name, date, bed_number, item, quantity, amount, remarks, returned_by, received_by, approved_by, accounting_status, ward_name, account_id', 'safe', 'on'=>'search'),
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
			'account' => array(self::BELONGS_TO, 'Account', 'account_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'patient_name' => 'Patient Name',
			'date' => 'Date',
			'bed_number' => 'Bed Number',
			'item' => 'Item',
			'quantity' => 'Quantity',
			'amount' => 'Amount',
			'remarks' => 'Remarks',
			'returned_by' => 'Returned By',
			'received_by' => 'Received By',
			'approved_by' => 'Approved By',
			'accounting_status' => 'Accounting Status',
			'ward_name' => 'Ward Name',
			'account_id' => 'Account',
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
		$criteria->compare('patient_name',$this->patient_name,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('bed_number',$this->bed_number,true);
		$criteria->compare('item',$this->item,true);
		$criteria->compare('quantity',$this->quantity,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('returned_by',$this->returned_by,true);
		$criteria->compare('received_by',$this->received_by,true);
		$criteria->compare('approved_by',$this->approved_by,true);
		$criteria->compare('accounting_status',$this->accounting_status);
		$criteria->compare('ward_name',$this->ward_name,true);
		$criteria->compare('account_id',$this->account_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ReturnSlipForm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
