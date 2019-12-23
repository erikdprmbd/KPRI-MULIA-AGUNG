<?php

namespace backend\modules\api\models;

use Yii;

/**
 * This is the model class for table "anggota".
 *
 * @property int $id_anggota
 * @property string $nama_anggota
 * @property string $alamat_anggota
 * @property int $no_telp_anggota
 * @property string $jk_anggota
 */
class Anggota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anggota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_anggota', 'nama_anggota', 'alamat_anggota', 'no_telp_anggota', 'jk_anggota'], 'required'],
            [['id_anggota', 'no_telp_anggota'], 'integer'],
            [['jk_anggota'], 'string'],
            [['nama_anggota'], 'string', 'max' => 100],
            [['alamat_anggota'], 'string', 'max' => 250],
            [['id_anggota'], 'unique'],
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
        ];
    }
}
