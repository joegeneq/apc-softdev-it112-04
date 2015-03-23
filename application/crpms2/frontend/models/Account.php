<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "account".
 *
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
 * @property ReturnSlipForm[] $returnSlipForms
 * @property StockIssueForm[] $stockIssueForms
 * @property StocksRecord[] $stocksRecords
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['account_username', 'account_password'], 'required'],
            [['search', 'reports', 'forms', 'system', 'rights_add', 'rights_edit', 'rights_delete', 'rights_view'], 'integer'],
            [['account_lastname', 'account_firstname', 'account_middle_initial', 'account_birthdate', 'account_home_address', 'account_email_address', 'account_contact_number', 'account_username', 'account_password', 'account_type'], 'string', 'max' => 45],
            [['account_username'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReturnSlipForms()
    {
        return $this->hasMany(ReturnSlipForm::className(), ['account_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockIssueForms()
    {
        return $this->hasMany(StockIssueForm::className(), ['account_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStocksRecords()
    {
        return $this->hasMany(StocksRecord::className(), ['account_id' => 'id']);
    }
}
