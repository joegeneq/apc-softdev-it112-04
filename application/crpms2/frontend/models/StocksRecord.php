<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "stocks_record".
 *
 * @property integer $id
 * @property string $description
 * @property integer $account_id
 *
 * @property Account $account
 * @property StocksRecordItem[] $stocksRecordItems
 */
class StocksRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stocks_record';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'account_id'], 'required'],
            [['account_id'], 'integer'],
            [['description'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
            'account_id' => 'Account ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccount()
    {
        return $this->hasOne(Account::className(), ['id' => 'account_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStocksRecordItems()
    {
        return $this->hasMany(StocksRecordItem::className(), ['stocks_record_id' => 'id']);
    }
}
