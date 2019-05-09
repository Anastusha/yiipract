<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "statistic".
 *
 * @property int $id
 * @property int $nhl_id
 * @property string $comand_name
 * @property int $game_count
 * @property int $points
 *
 * @property Nhl $nhl
 */
class Statistic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'statistic';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nhl_id', 'game_count', 'points'], 'integer'],
            [['comand_name'], 'string', 'max' => 255],
            [['nhl_id'], 'exist', 'skipOnError' => true, 'targetClass' => Nhl::className(), 'targetAttribute' => ['nhl_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nhl_id' => 'Nhl ID',
            'comand_name' => 'Comand Name',
            'game_count' => 'Game Count',
            'points' => 'Points',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNhl()
    {
        return $this->hasOne(Nhl::className(), ['id' => 'nhl_id']);
    }
}
