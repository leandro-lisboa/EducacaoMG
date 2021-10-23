<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organizador".
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $cargo
 * @property int|null $escola_id
 *
 * @property Escola $escola
 * @property Projeto[] $projetos
 */
class Organizador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'organizador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['escola_id'], 'integer'],
            [['nome', 'cargo'], 'string', 'max' => 255],
            [['escola_id'], 'exist', 'skipOnError' => true, 'targetClass' => Escola::className(), 'targetAttribute' => ['escola_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'cargo' => 'Cargo',
            'escola_id' => 'Escola',
        ];
    }

    /**
     * Gets query for [[Escola]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEscola()
    {
        return $this->hasOne(Escola::className(), ['id' => 'escola_id']);
    }

    /**
     * Gets query for [[Projetos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjetos()
    {
        return $this->hasMany(Projeto::className(), ['organizador_id' => 'id']);
    }
}
