<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "golongan".
 *
 * @property int $id_golongan
 * @property string $nama_golongan
 *
 * @property Anggota[] $anggotas
 */
class Golongan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golongan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_golongan', 'nama_golongan'], 'required'],
            [['id_golongan'], 'integer'],
            [['nama_golongan'], 'string', 'max' => 100],
            [['id_golongan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_golongan' => 'Id Golongan',
            'nama_golongan' => 'Nama Golongan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnggotas()
    {
        return $this->hasMany(Anggota::className(), ['id_golongan' => 'id_golongan']);
    }
}
