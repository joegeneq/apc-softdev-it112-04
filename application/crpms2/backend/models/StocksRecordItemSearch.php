<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\StocksRecordItem;

/**
 * StocksRecordItemSearch represents the model behind the search form about `backend\models\StocksRecordItem`.
 */
class StocksRecordItemSearch extends StocksRecordItem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'available_quantity', 'released_quantity', 'purchasing_status', 'stocks_record_id'], 'integer'],
            [['item_name', 'delivery_date', 'remarks'], 'safe'],
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
        $query = StocksRecordItem::find();

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
            'available_quantity' => $this->available_quantity,
            'released_quantity' => $this->released_quantity,
            'delivery_date' => $this->delivery_date,
            'purchasing_status' => $this->purchasing_status,
            'stocks_record_id' => $this->stocks_record_id,
        ]);

        $query->andFilterWhere(['like', 'item_name', $this->item_name])
            ->andFilterWhere(['like', 'remarks', $this->remarks]);

        return $dataProvider;
    }
}
