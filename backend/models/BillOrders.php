<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bill_orders".
 *
 * @property integer $id
 * @property integer $nama
 * @property integer $alamat
 * @property integer $telp
 * @property integer $id_member
 */
class BillOrders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bill_orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nama', 'alamat', 'telp', 'id_member'], 'required'],
            [['id', 'nama', 'alamat', 'telp', 'id_member'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'telp' => 'Telp',
            'id_member' => 'Id Member',
        ];
    }
}
