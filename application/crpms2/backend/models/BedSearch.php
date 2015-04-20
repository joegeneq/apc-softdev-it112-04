<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Bed;

/**
 * BedSearch represents the model behind the search form about `backend\models\Bed`.
 */
class BedSearch extends Bed
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'bed_number', 'location_id'], 'integer'],
            [['bed_code'], 'safe'],
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
        $query = Bed::find();

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
            'bed_number' => $this->bed_number,
            'location_id' => $this->location_id,
        ]);

        $query->andFilterWhere(['like', 'bed_code', $this->bed_code]);

        return $dataProvider;
    }
}
