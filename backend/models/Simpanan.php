<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%simpanan}}".
 *
 * @property int $id_simpanan
 * @property int $kode_rekening
 * @property int $id_jenis_simpanan
 * @property int $id_anggota
 * @property int $jumlah_simpanan
 *
 * @property Anggota $anggota
 * @property JenisSimpanan $jenisSimpanan
 */
class Simpanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%simpanan}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_rekening', 'id_jenis_simpanan', 'id_anggota', 'jumlah_simpanan'], 'required'],
            [['kode_rekening', 'id_jenis_simpanan', 'id_anggota', 'jumlah_simpanan'], 'integer'],
            [['id_anggota'], 'exist', 'skipOnError' => true, 'targetClass' => Anggota::className(), 'targetAttribute' => ['id_anggota' => 'id_anggota']],
            [['id_jenis_simpanan'], 'exist', 'skipOnError' => true, 'targetClass' => JenisSimpanan::className(), 'targetAttribute' => ['id_jenis_simpanan' => 'id_jenis_simpanan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_simpanan' => 'Id Simpanan',
            'kode_rekening' => 'Kode Rekening',
            'id_jenis_simpanan' => 'Id Jenis Simpanan',
            'id_anggota' => 'Id Anggota',
            'jumlah_simpanan' => 'Jumlah Simpanan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnggota()
    {
        return $this->hasOne(Anggota::className(), ['id_anggota' => 'id_anggota']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisSimpanan()
    {
        return $this->hasOne(JenisSimpanan::className(), ['id_jenis_simpanan' => 'id_jenis_simpanan']);
    }

    /**
     * {@inheritdoc}
     * @return SimpananQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SimpananQuery(get_called_class());
    }
}
