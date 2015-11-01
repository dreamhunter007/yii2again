<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cc_player_status".
 *
 * @property integer $player_id
 * @property integer $team_id
 * @property integer $game_id
 * @property integer $role
 * @property integer $score
 * @property integer $rebound
 * @property integer $assist
 * @property integer $steal
 * @property integer $block
 * @property integer $turnover
 * @property integer $foul
 * @property integer $shoot_attemped
 * @property integer $shoot_made
 * @property integer $three_point_attemped
 * @property integer $three_point_made
 * @property integer $free_throw_attemped
 * @property integer $free_throw_made
 * @property string $update_time
 */
class PlayerStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cc_player_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['player_id', 'team_id', 'game_id'], 'required'],
            [['player_id', 'team_id', 'game_id', 'role', 'score', 'rebound', 'assist', 'steal', 'block', 'turnover', 'foul', 'shoot_attemped', 'shoot_made', 'three_point_attemped', 'three_point_made', 'free_throw_attemped', 'free_throw_made'], 'integer'],
            [['update_time'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'player_id' => 'Player ID',
            'team_id' => 'Team ID',
            'game_id' => 'Game ID',
            'role' => 'Role',
            'score' => 'Score',
            'rebound' => 'Rebound',
            'assist' => 'Assist',
            'steal' => 'Steal',
            'block' => 'Block',
            'turnover' => 'Turnover',
            'foul' => 'Foul',
            'shoot_attemped' => 'Shoot Attemped',
            'shoot_made' => 'Shoot Made',
            'three_point_attemped' => 'Three Point Attemped',
            'three_point_made' => 'Three Point Made',
            'free_throw_attemped' => 'Free Throw Attemped',
            'free_throw_made' => 'Free Throw Made',
            'update_time' => 'Update Time',
        ];
    }
}
