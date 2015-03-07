<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stock_issue_form".
 *
 * @property integer $id
 * @property string $date
 * @property string $ward_name
 * @property string $prepared_by
 * @property string $approved_by
 * @property string $issued_by
 * @property string $received_by
 * @property integer $account_id
 */
class StockIssueForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stock_issue_form';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'date', 'ward_name', 'prepared_by', 'approved_by', 'issued_by', 'received_by', 'account_id'], 'required'],
            [['id', 'account_id'], 'integer'],
            [['date'], 'safe'],
            [['ward_name', 'prepared_by', 'approved_by', 'issued_by', 'received_by'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'ward_name' => 'Ward Name',
            'prepared_by' => 'Prepared By',
            'approved_by' => 'Approved By',
            'issued_by' => 'Issued By',
            'received_by' => 'Received By',
            'account_id' => 'Account ID',
        ];
    }
}
