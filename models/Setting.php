<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property int $id
 * @property double $ms_sheet
 * @property double $ss_sheet
 * @property double $powder_coating
 * @property double $glass
 * @property string $created_at
 */
class Setting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ms_sheet', 'ss_sheet', 'powder_coating', 'glass'], 'number'],
            [['created_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ms_sheet' => 'Ms Sheet',
            'ss_sheet' => 'Ss Sheet',
            'powder_coating' => 'Powder Coating',
            'glass' => 'Glass',
            'created_at' => 'Created At',
        ];
    }
}
