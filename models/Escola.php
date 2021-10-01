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
 * @property int|null $usuario_id
 *
 * @property Organizador[] $organizadors
 * @property Projeto[] $projetos
 * @property Usuario $usuario
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
            [['usuario_id'], 'integer'],
            [['nome', 'telefone', 'email'], 'string', 'max' => 255],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_id' => 'id']],
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
            'usuario_id' => 'Usuario ID',
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

    /**
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_id']);
    }
}
