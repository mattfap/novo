<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string $nascimento
 * @property string $estado
 * @property string $pais
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
            [['nome', 'email', 'nascimento', 'estado', 'pais'], 'required'],
            [['nascimento'], 'safe'],
            [['nome', 'email'], 'string', 'max' => 50],
            [['estado', 'pais'], 'string', 'max' => 10],
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
            'email' => 'Email',
            'nascimento' => 'Nascimento',
            'estado' => 'Estado',
            'pais' => 'Pais',
        ];
    }
}
