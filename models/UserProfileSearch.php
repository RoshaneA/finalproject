<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UserProfile;

/**
 * UserProfileSearch represents the model behind the search form about `app\models\UserProfile`.
 */
class UserProfileSearch extends UserProfile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['full_name', 'gender', 'date_of_birth', 'years_of_experience', 'Industry', 'location', 'about_me', 'profile_picture', 'professional_title', 'career_level', 'commuication_level', 'organizational_level', 'job_related_level', 'address', 'telephone', 'website', 'email'], 'safe'],
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
        $query = UserProfile::find();

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
            'id' => $this->id,
            'date_of_birth' => $this->date_of_birth,
        ]);

        $query->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'years_of_experience', $this->years_of_experience])
            ->andFilterWhere(['like', 'Industry', $this->Industry])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'about_me', $this->about_me])
            ->andFilterWhere(['like', 'profile_picture', $this->profile_picture])
            ->andFilterWhere(['like', 'professional_title', $this->professional_title])
            ->andFilterWhere(['like', 'career_level', $this->career_level])
            ->andFilterWhere(['like', 'commuication_level', $this->commuication_level])
            ->andFilterWhere(['like', 'organizational_level', $this->organizational_level])
            ->andFilterWhere(['like', 'job_related_level', $this->job_related_level])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'telephone', $this->telephone])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
