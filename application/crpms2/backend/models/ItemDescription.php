<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "item_description".
 *
 * @property integer $id
 * @property integer $item_id
 * @property string $manufacturer
 * @property string $remarks
 * @property string $created_at
 *
 * @property Item $item
 */
class ItemDescription extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item_description';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'manufacturer', 'remarks'], 'required'],
            [['item_id'], 'integer'],
            [['remarks'], 'string'],
            [['created_at'], 'safe'],
            [['manufacturer'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_id' => 'Item Name',
            'manufacturer' => 'Manufacturer',
            'remarks' => 'Remarks',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['id' => 'item_id']);
    }
}
