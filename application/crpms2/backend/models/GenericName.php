<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "generic_name".
 *
 * @property integer $id
 * @property string $generic_name
 * @property string $description
 *
 * @property Item[] $items
 */
class GenericName extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'generic_name';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['generic_name', 'description'], 'required'],
            [['description'], 'string'],
            [['generic_name'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'generic_name' => 'Generic Name',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['generic_name_id' => 'id']);
    }
}
