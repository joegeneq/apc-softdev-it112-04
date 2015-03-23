<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property integer $id
 * @property string $employee_lastname
 * @property string $employee_firstname
 * @property string $employee_middle_initial
 * @property string $employee_birthdate
 * @property string $employee_home_address
 * @property string $employee_email_address
 * @property string $employee_contact_number
 * @property string $employee_username
 * @property string $employee_password
 * @property string $employee_type
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
class Employee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_username, employee_password', 'required'),
			array('search, reports, forms, system, rights_add, rights_edit, rights_delete, rights_view', 'numerical', 'integerOnly'=>true),
			array('employee_lastname, employee_firstname, employee_middle_initial, employee_birthdate, employee_home_address, employee_email_address, employee_contact_number, employee_username, employee_password, employee_type', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, employee_lastname, employee_firstname, employee_middle_initial, employee_birthdate, employee_home_address, employee_email_address, employee_contact_number, employee_username, employee_password, employee_type, search, reports, forms, system, rights_add, rights_edit, rights_delete, rights_view', 'safe', 'on'=>'search'),
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
			'returnSlipForms' => array(self::HAS_MANY, 'ReturnSlipForm', 'employee_id'),
			'stockIssueForms' => array(self::HAS_MANY, 'StockIssueForm', 'employee_id'),
			'stocksRecords' => array(self::HAS_MANY, 'StocksRecord', 'employee_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'employee_lastname' => 'Employee Lastname',
			'employee_firstname' => 'Employee Firstname',
			'employee_middle_initial' => 'Employee Middle Initial',
			'employee_birthdate' => 'Employee Birthdate',
			'employee_home_address' => 'Employee Home Address',
			'employee_email_address' => 'Employee Email Address',
			'employee_contact_number' => 'Employee Contact Number',
			'employee_username' => 'Employee Username',
			'employee_password' => 'Employee Password',
			'employee_type' => 'Employee Type',
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
		$criteria->compare('employee_lastname',$this->employee_lastname,true);
		$criteria->compare('employee_firstname',$this->employee_firstname,true);
		$criteria->compare('employee_middle_initial',$this->employee_middle_initial,true);
		$criteria->compare('employee_birthdate',$this->employee_birthdate,true);
		$criteria->compare('employee_home_address',$this->employee_home_address,true);
		$criteria->compare('employee_email_address',$this->employee_email_address,true);
		$criteria->compare('employee_contact_number',$this->employee_contact_number,true);
		$criteria->compare('employee_username',$this->employee_username,true);
		$criteria->compare('employee_password',$this->employee_password,true);
		$criteria->compare('employee_type',$this->employee_type,true);
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
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
