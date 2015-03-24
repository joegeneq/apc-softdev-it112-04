<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mycomment;

/**
 * MycommentSearch represents the model behind the search form about `app\models\Mycomment`.
 */
class MycommentSearch extends Mycomment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'myaddress_id'], 'integer'],
            [['author', 'body', 'created_at'], 'safe'],
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
        $query = Mycomment::find();

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
            'myaddress_id' => $this->myaddress_id,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'body', $this->body]);

        return $dataProvider;
    }
}
