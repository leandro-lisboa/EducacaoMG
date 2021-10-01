<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string|null $login
 * @property string|null $senha
 * @property string|null $nome
 *
 * @property Escola[] $escolas
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'senha', 'nome'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'senha' => 'Senha',
            'nome' => 'Nome',
        ];
    }

    /**
     * Gets query for [[Escolas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEscolas()
    {
        return $this->hasMany(Escola::className(), ['usuario_id' => 'id']);
    }
}
