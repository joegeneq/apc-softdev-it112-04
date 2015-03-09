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
 * @property integer $user_id
 *
 * @property User $user
 * @property StockIssueItem[] $stockIssueItems
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
            [['id', 'date', 'ward_name', 'prepared_by', 'approved_by', 'issued_by', 'received_by', 'user_id'], 'required'],
            [['id', 'user_id'], 'integer'],
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
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockIssueItems()
    {
        return $this->hasMany(StockIssueItem::className(), ['stock_issue_form_id' => 'id']);
    }
}
