<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\AboutMedicine;

/**
 * AboutMedicineSearch represents the model behind the search form about `backend\models\AboutMedicine`.
 */
class AboutMedicineSearch extends AboutMedicine
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'stocks_record_item_id'], 'integer'],
            [['description', 'manufacturer'], 'safe'],
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
        $query = AboutMedicine::find();

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
            'stocks_record_item_id' => $this->stocks_record_item_id,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'manufacturer', $this->manufacturer]);

        return $dataProvider;
    }
}
