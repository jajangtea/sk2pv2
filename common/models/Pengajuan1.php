<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%pengajuan1}}".
 *
 * @property int $IDPengajuan
 * @property int $IDJenisSidang
 * @property int $NIM
 * @property string $TanggalDaftar
 * @property string $Judul
 * @property string $keterangan
 * @property int $IDstatusProposal
 */
class Pengajuan1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%pengajuan1}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDJenisSidang', 'NIM', 'IDstatusProposal'], 'integer'],
            [['TanggalDaftar'], 'safe'],
            [['Judul', 'keterangan'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDPengajuan' => 'I D Pengajuan',
            'IDJenisSidang' => 'I D Jenis Sidang',
            'NIM' => 'N I M',
            'TanggalDaftar' => 'Tanggal Daftar',
            'Judul' => 'Judul',
            'keterangan' => 'Keterangan',
            'IDstatusProposal' => 'I Dstatus Proposal',
        ];
    }
}
