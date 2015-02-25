<?php

/**
 * This is the model class for table "stock_issue_form".
 *
 * The followings are the available columns in table 'stock_issue_form':
 * @property integer $id
 * @property string $date
 * @property string $ward_name
 * @property string $prepared_by
 * @property string $approved_by
 * @property string $issued_by
 * @property string $received_by
 * @property integer $account_id
 *
 * The followings are the available model relations:
 * @property Account $account
 * @property StockIssueItem[] $stockIssueItems
 */
class StockIssueForm extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stock_issue_form';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, ward_name, prepared_by, approved_by, issued_by, received_by, account_id', 'required'),
			array('account_id', 'numerical', 'integerOnly'=>true),
			array('ward_name, prepared_by, approved_by, issued_by, received_by', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, date, ward_name, prepared_by, approved_by, issued_by, received_by, account_id', 'safe', 'on'=>'search'),
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
			'stockIssueItems' => array(self::HAS_MANY, 'StockIssueItem', 'stock_issue_form_id'),
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
			'ward_name' => 'Ward Name',
			'prepared_by' => 'Prepared By',
			'approved_by' => 'Approved By',
			'issued_by' => 'Issued By',
			'received_by' => 'Received By',
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
		$criteria->compare('date',$this->date,true);
		$criteria->compare('ward_name',$this->ward_name,true);
		$criteria->compare('prepared_by',$this->prepared_by,true);
		$criteria->compare('approved_by',$this->approved_by,true);
		$criteria->compare('issued_by',$this->issued_by,true);
		$criteria->compare('received_by',$this->received_by,true);
		$criteria->compare('account_id',$this->account_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StockIssueForm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
