<?php

/**
 * This is the model class for table "account".
 *
 * The followings are the available columns in table 'account':
 * @property integer $id
 * @property string $account_lastname
 * @property string $account_firstname
 * @property string $account_middle_initial
 * @property string $account_birthdate
 * @property string $account_home_address
 * @property string $account_email_address
 * @property string $account_contact_number
 * @property string $account_username
 * @property string $account_password
 * @property string $account_type
 * @property integer $search
 * @property integer $reports
 * @property integer $forms
 * @property integer $system
 * @property integer $rights_add
 * @property integer $rights_edit
 * @property integer $rights_delete
 * @property integer $rights_view
 *
 * The followings are the available model relations:
 * @property ReturnSlipForm[] $returnSlipForms
 * @property StockIssueForm[] $stockIssueForms
 * @property StocksRecord[] $stocksRecords
 */
class Account extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'account';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('account_username, account_password', 'required'),
			array('search, reports, forms, system, rights_add, rights_edit, rights_delete, rights_view', 'numerical', 'integerOnly'=>true),
			array('account_lastname, account_firstname, account_middle_initial, account_birthdate, account_home_address, account_email_address, account_contact_number, account_username, account_password, account_type', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, account_lastname, account_firstname, account_middle_initial, account_birthdate, account_home_address, account_email_address, account_contact_number, account_username, account_password, account_type, search, reports, forms, system, rights_add, rights_edit, rights_delete, rights_view', 'safe', 'on'=>'search'),
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
			'returnSlipForms' => array(self::HAS_MANY, 'ReturnSlipForm', 'account_id'),
			'stockIssueForms' => array(self::HAS_MANY, 'StockIssueForm', 'account_id'),
			'stocksRecords' => array(self::HAS_MANY, 'StocksRecord', 'acoount_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'account_lastname' => 'Account Lastname',
			'account_firstname' => 'Account Firstname',
			'account_middle_initial' => 'Account Middle Initial',
			'account_birthdate' => 'Account Birthdate',
			'account_home_address' => 'Account Home Address',
			'account_email_address' => 'Account Email Address',
			'account_contact_number' => 'Account Contact Number',
			'account_username' => 'Account Username',
			'account_password' => 'Account Password',
			'account_type' => 'Account Type',
			'search' => 'Search',
			'reports' => 'Reports',
			'forms' => 'Forms',
			'system' => 'System',
			'rights_add' => 'Rights Add',
			'rights_edit' => 'Rights Edit',
			'rights_delete' => 'Rights Delete',
			'rights_view' => 'Rights View',
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
		$criteria->compare('account_lastname',$this->account_lastname,true);
		$criteria->compare('account_firstname',$this->account_firstname,true);
		$criteria->compare('account_middle_initial',$this->account_middle_initial,true);
		$criteria->compare('account_birthdate',$this->account_birthdate,true);
		$criteria->compare('account_home_address',$this->account_home_address,true);
		$criteria->compare('account_email_address',$this->account_email_address,true);
		$criteria->compare('account_contact_number',$this->account_contact_number,true);
		$criteria->compare('account_username',$this->account_username,true);
		$criteria->compare('account_password',$this->account_password,true);
		$criteria->compare('account_type',$this->account_type,true);
		$criteria->compare('search',$this->search);
		$criteria->compare('reports',$this->reports);
		$criteria->compare('forms',$this->forms);
		$criteria->compare('system',$this->system);
		$criteria->compare('rights_add',$this->rights_add);
		$criteria->compare('rights_edit',$this->rights_edit);
		$criteria->compare('rights_delete',$this->rights_delete);
		$criteria->compare('rights_view',$this->rights_view);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Account the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
