<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nhl".
 *
 * @property int $id
 * @property string $country_code
 * @property int $rank
 * @property int $comand_count
 * @property string $foundation_date
 * @property string $season
 *
 * @property Statistic[] $statistics
 */
class Nhl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nhl';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rank', 'comand_count'], 'integer'],
            [['foundation_date'], 'safe'],
            [['country_code', 'season'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country_code' => 'Country Code',
            'rank' => 'Rank',
            'comand_count' => 'Comand Count',
            'foundation_date' => 'Foundation Date',
            'season' => 'Season',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatistics()
    {
        return $this->hasMany(Statistic::className(), ['nhl_id' => 'id']);
    }
}
