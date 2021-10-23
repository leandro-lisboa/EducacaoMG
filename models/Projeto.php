<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projeto".
 *
 * @property int $id
 * @property string|null $nome
 * @property int|null $escola_id
 * @property string|null $data
 * @property int|null $organizador_id
 * @property string|null $anexo
 * @property string|null $categoria
 *
 * @property Escola $escola
 * @property Organizador $organizador
 */
class Projeto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projeto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['escola_id', 'organizador_id'], 'integer'],
            [['nome', 'data', 'anexo', 'categoria'], 'string', 'max' => 255],
            [['escola_id'], 'exist', 'skipOnError' => true, 'targetClass' => Escola::className(), 'targetAttribute' => ['escola_id' => 'id']],
            [['organizador_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organizador::className(), 'targetAttribute' => ['organizador_id' => 'id']],
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
            'escola_id' => 'Escola',
            'data' => 'Data',
            'organizador_id' => 'Organizador',
            'anexo' => 'Anexo',
            'categoria' => 'Categoria',
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
     * Gets query for [[Organizador]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrganizador()
    {
        return $this->hasOne(Organizador::className(), ['id' => 'organizador_id']);
    }
}
