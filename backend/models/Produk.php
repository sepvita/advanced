<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property integer $id
 * @property integer $id_kategori
 * @property string $nama
 * @property string $detail
 * @property integer $harga
 * @property integer $qty
 * @property string $img
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_kategori', 'nama', 'detail', 'harga', 'qty', 'img'], 'required'],
            [['id', 'id_kategori', 'harga', 'qty'], 'integer'],
            [['detail'], 'string'],
            [['nama'], 'string', 'max' => 50],
            [['img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_kategori' => 'Id Kategori',
            'nama' => 'Nama',
            'detail' => 'Detail',
            'harga' => 'Harga',
            'qty' => 'Qty',
            'img' => 'Img',
        ];
    }
}
