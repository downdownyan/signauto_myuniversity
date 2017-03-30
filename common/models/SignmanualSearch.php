<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Signmanual;

/**
 * SignmanualSearch represents the model behind the search form about `common\models\Signmanual`.
 */
class SignmanualSearch extends Signmanual
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mobile', 'image'], 'integer'],
            [['mobile', 'username', 'content', 'jindu', 'weidu'], 'safe'],
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
        $query = Signmanual::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'mobile' => $this->mobile,
            'image' => $this->image,
        ]);

        $query->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'jindu', $this->jindu])
            ->andFilterWhere(['like', 'weidu', $this->weidu]);

        return $dataProvider;
    }
}
