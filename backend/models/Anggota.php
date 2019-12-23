<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%anggota}}".
 *
 * @property int $id_anggota
 * @property string $nama_anggota
 * @property string $alamat_anggota
 * @property int $no_telp_anggota
 * @property string $jk_anggota
 * @property int $id_golongan
 * @property int $id_jabatan
 *
 * @property Golongan $golongan
 * @property Jabatan $jabatan
 */
class Anggota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%anggota}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_anggota', 'nama_anggota', 'alamat_anggota', 'no_telp_anggota', 'jk_anggota', 'id_golongan', 'id_jabatan'], 'required'],
            [['id_anggota', 'no_telp_anggota', 'id_golongan', 'id_jabatan'], 'integer'],
            [['jk_anggota'], 'string'],
            [['nama_anggota'], 'string', 'max' => 100],
            [['alamat_anggota'], 'string', 'max' => 250],
            [['id_anggota'], 'unique'],
            [['id_golongan'], 'exist', 'skipOnError' => true, 'targetClass' => Golongan::className(), 'targetAttribute' => ['id_golongan' => 'id_golongan']],
            [['id_jabatan'], 'exist', 'skipOnError' => true, 'targetClass' => Jabatan::className(), 'targetAttribute' => ['id_jabatan' => 'id_jabatan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_anggota' => 'Id Anggota',
            'nama_anggota' => 'Nama Anggota',
            'alamat_anggota' => 'Alamat Anggota',
            'no_telp_anggota' => 'No Telp Anggota',
            'jk_anggota' => 'Jk Anggota',
            'id_golongan' => 'Id Golongan',
            'id_jabatan' => 'Id Jabatan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolongan()
    {
        return $this->hasOne(Golongan::className(), ['id_golongan' => 'id_golongan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJabatan()
    {
        return $this->hasOne(Jabatan::className(), ['id_jabatan' => 'id_jabatan']);
    }

    /**
     * {@inheritdoc}
     * @return AnggotaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AnggotaQuery(get_called_class());
    }
}
