<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cc_team_status".
 *
 * @property integer $team_id
 * @property integer $game_id
 * @property integer $score
 * @property integer $rebound
 * @property integer $assist
 * @property integer $steal
 * @property integer $block
 * @property integer $turnover
 * @property integer $foul
 * @property integer $shoot_attemp
 * @property integer $shooot_made
 * @property integer $three_point_attemp
 * @property integer $three_point_made
 * @property integer $free_throw_attemp
 * @property integer $free_throw_made
 * @property string $update_time
 */
class TeamStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cc_team_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['team_id', 'game_id'], 'required'],
            [['team_id', 'game_id', 'score', 'rebound', 'assist', 'steal', 'block', 'turnover', 'foul', 'shoot_attemp', 'shooot_made', 'three_point_attemp', 'three_point_made', 'free_throw_attemp', 'free_throw_made'], 'integer'],
            [['update_time'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'team_id' => 'Team ID',
            'game_id' => 'Game ID',
            'score' => 'Score',
            'rebound' => 'Rebound',
            'assist' => 'Assist',
            'steal' => 'Steal',
            'block' => 'Block',
            'turnover' => 'Turnover',
            'foul' => 'Foul',
            'shoot_attemp' => 'Shoot Attemp',
            'shooot_made' => 'Shooot Made',
            'three_point_attemp' => 'Three Point Attemp',
            'three_point_made' => 'Three Point Made',
            'free_throw_attemp' => 'Free Throw Attemp',
            'free_throw_made' => 'Free Throw Made',
            'update_time' => 'Update Time',
        ];
    }
}
