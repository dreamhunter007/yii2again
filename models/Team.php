<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cc_team".
 *
 * @property integer $id
 * @property string $name
 * @property string $type
 * @property string $logo
 * @property string $city
 * @property string $boss
 * @property string $coach
 * @property string $field
 * @property integer $champion_count
 * @property string $built_time
 * @property string $create_time
 * @property string $update_time
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cc_team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['champion_count'], 'integer'],
            [['built_time', 'create_time', 'update_time'], 'safe'],
            [['name', 'boss', 'coach'], 'string', 'max' => 20],
            [['type'], 'string', 'max' => 10],
            [['logo'], 'string', 'max' => 255],
            [['city', 'field'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'type' => 'Type',
            'logo' => 'Logo',
            'city' => 'City',
            'boss' => 'Boss',
            'coach' => 'Coach',
            'field' => 'Field',
            'champion_count' => 'Champion Count',
            'built_time' => 'Built Time',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
