<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stocks_record".
 *
 * @property integer $id
 * @property string $description
 * @property integer $user_id
 *
 * @property User $user
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
            [['id', 'description', 'user_id'], 'required'],
            [['id', 'user_id'], 'integer'],
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
    public function getStocksRecordItems()
    {
        return $this->hasMany(StocksRecordItem::className(), ['stocks_record_id' => 'id']);
    }
}
