<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%jenis_simpanan}}".
 *
 * @property int $id_jenis_simpanan
 * @property string $nama_simpanan
 *
 * @property Simpanan[] $simpanans
 */
class JenisSimpanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%jenis_simpanan}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_simpanan'], 'required'],
            [['nama_simpanan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jenis_simpanan' => 'Id Jenis Simpanan',
            'nama_simpanan' => 'Nama Simpanan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSimpanans()
    {
        return $this->hasMany(Simpanan::className(), ['id_jenis_simpanan' => 'id_jenis_simpanan']);
    }

    /**
     * {@inheritdoc}
     * @return JenisSimpananQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JenisSimpananQuery(get_called_class());
    }
}
