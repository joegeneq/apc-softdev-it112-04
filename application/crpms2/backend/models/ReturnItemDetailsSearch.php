<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ReturnItemDetails;

/**
 * ReturnItemDetailsSearch represents the model behind the search form about `backend\models\ReturnItemDetails`.
 */
class ReturnItemDetailsSearch extends ReturnItemDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'return_item_header_id', 'item_id', 'quantity'], 'integer'],
            [['amount'], 'number'],
            [['date_created'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ReturnItemDetails::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'return_item_header_id' => $this->return_item_header_id,
            'item_id' => $this->item_id,
            'quantity' => $this->quantity,
            'amount' => $this->amount,
            'date_created' => $this->date_created,
        ]);

        return $dataProvider;
    }
}
