<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property string $nama
 * @property string $nip
 * @property string $alamat
 * @property int $id_jabatan
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nip', 'alamat', 'id_jabatan'], 'required'],
            [['id_jabatan'], 'integer'],
            [['nama', 'alamat'], 'string', 'max' => 250],
            [['nip'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nama' => 'Nama',
            'nip' => 'NIP',
            'alamat' => 'Jenis Kelamin',
            'id_jabatan' => 'Id Jabatan',
        ];
    }

    public function getJabatan()
    {
        //same as above
        return $this->hasOne (Jabatan::className(), ['id_jabatan' => 'id_jabatan']);
    }
}
