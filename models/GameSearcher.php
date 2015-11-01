<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Game;

/**
 * GameSearcher represents the model behind the search form about `app\models\Game`.
 */
class GameSearcher extends Game
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'home_team_id', 'guest_team_id'], 'integer'],
            [['title', 'city', 'field', 'time_left', 'start_time', 'end_time', 'create_time', 'update_time'], 'safe'],
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
        $query = Game::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'home_team_id' => $this->home_team_id,
            'guest_team_id' => $this->guest_team_id,
            'time_left' => $this->time_left,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'field', $this->field]);

        return $dataProvider;
    }
}
