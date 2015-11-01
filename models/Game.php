<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cc_game".
 *
 * @property integer $id
 * @property string $title
 * @property string $city
 * @property string $field
 * @property integer $home_team_id
 * @property integer $guest_team_id
 * @property string $time_left
 * @property string $start_time
 * @property string $end_time
 * @property string $create_time
 * @property string $update_time
 */
class Game extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cc_game';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['home_team_id', 'guest_team_id'], 'integer'],
            [['time_left', 'start_time', 'end_time', 'create_time', 'update_time'], 'safe'],
            [['title', 'city', 'field'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'city' => 'City',
            'field' => 'Field',
            'home_team_id' => 'Home Team ID',
            'guest_team_id' => 'Guest Team ID',
            'time_left' => 'Time Left',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
