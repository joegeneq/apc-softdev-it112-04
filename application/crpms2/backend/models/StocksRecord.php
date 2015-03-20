<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stocks_record".
 *
 * @property integer $id
 * @property string $description
 * @property integer $user_id
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
            [['description', 'user_id'], 'required'],
            [['user_id'], 'integer'],
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
}
