<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\StockInventory;

/**
 * StockInventorySearch represents the model behind the search form about `backend\models\StockInventory`.
 */
class StockInventorySearch extends StockInventory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'item_id', 'location_id', 'quantity_onhand', 'quantity_onorder', 'created_by'], 'integer'],
            [['stock_inventory_code', 'created'], 'safe'],
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
        $query = StockInventory::find();

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
            'item_id' => $this->item_id,
            'location_id' => $this->location_id,
            'quantity_onhand' => $this->quantity_onhand,
            'quantity_onorder' => $this->quantity_onorder,
            'created' => $this->created,
            'created_by' => $this->created_by,
        ]);

        $query->andFilterWhere(['like', 'stock_inventory_code', $this->stock_inventory_code]);

        return $dataProvider;
    }
}
