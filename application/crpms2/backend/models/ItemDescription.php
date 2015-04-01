<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "item_description".
 *
 * @property integer $id
 * @property integer $item_code
 * @property integer $item_id
 * @property string $item_name
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
            [['item_code', 'item_id', 'item_name', 'manufacturer', 'remarks'], 'required'],
            [['item_code', 'item_id'], 'integer'],
            [['remarks'], 'string'],
            [['created_at'], 'safe'],
            [['item_name', 'manufacturer'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_code' => 'Item Code',
            'item_id' => 'Item ID',
            'item_name' => 'Item Name',
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
