<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $prefix
 * @property string $first_name
 * @property string $last_name
 * @property string $street_address
 * @property string $parish
 * @property string $phone_number

 * @property string $email
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'street_address', 'parish', 'phone_number', 'email'], 'required'],
            [['prefix'], 'string', 'max' => 10],
            [['first_name', 'last_name', 'parish'], 'string', 'max' => 30],
            [['street_address', 'email'], 'string', 'max' => 150],
            [['phone_number'], 'string', 'max' => 14],
            [['email'], 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prefix' => 'Gender',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'street_address' => 'Street Address',
            'parish' => 'Parish',
            'phone_number' => 'Phone Number',
            'email' => 'Email',
        ];
    }
}
