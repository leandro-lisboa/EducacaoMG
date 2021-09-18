<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "escola".
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $telefone
 * @property string|null $email
 *
 * @property Organizador[] $organizadors
 * @property Projeto[] $projetos
 */
class Escola extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'escola';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'telefone', 'email'], 'string', 'max' => 255],
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
            'telefone' => 'Telefone',
            'email' => 'Email',
        ];
    }

    /**
     * Gets query for [[Organizadors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrganizadors()
    {
        return $this->hasMany(Organizador::className(), ['escola_id' => 'id']);
    }

    /**
     * Gets query for [[Projetos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjetos()
    {
        return $this->hasMany(Projeto::className(), ['escola_id' => 'id']);
    }
}
