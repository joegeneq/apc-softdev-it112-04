<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stocks_record".
 *
 * @property integer $id
 * @property string $description
 * @property integer $account_id
 */
class StockRecord extends \yii\db\ActiveRecord
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
            [['id', 'description', 'account_id'], 'required'],
            [['id', 'account_id'], 'integer'],
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
}
