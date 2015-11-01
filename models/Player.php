<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cc_player".
 *
 * @property integer $id
 * @property integer $team_id
 * @property string $name
 * @property integer $gender
 * @property string $image
 * @property integer $position
 * @property string $birthday
 * @property integer $height
 * @property integer $weight
 * @property string $career_start_time
 * @property string $create_time
 * @property string $update_time
 */
class Player extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cc_player';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'team_id', 'gender', 'position', 'height', 'weight'], 'integer'],
            [['birthday', 'career_start_time', 'create_time', 'update_time'], 'safe'],
            [['name'], 'string', 'max' => 20],
            [['image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'team_id' => 'Team ID',
            'name' => 'Name',
            'gender' => 'Gender',
            'image' => 'Image',
            'position' => 'Position',
            'birthday' => 'Birthday',
            'height' => 'Height',
            'weight' => 'Weight',
            'career_start_time' => 'Career Start Time',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
