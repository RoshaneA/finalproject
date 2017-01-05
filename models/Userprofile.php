<?php

namespace app\models;

use Yii;


class Userprofile extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userprofile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name', 'gender', 'date_of_birth', 'years_of_experience', 'Industry', 'location', 'about_me', 'profile_picture', 'professional_title', 'career_level', 'commuication_level', 'organizational_level', 'job_related_level', 'address', 'telephone', 'website', 'email'], 'required'],
            [['date_of_birth'], 'safe'],
            [['full_name', 'gender', 'years_of_experience', 'Industry', 'location', 'about_me', 'profile_picture', 'professional_title', 'career_level', 'commuication_level', 'organizational_level', 'job_related_level', 'address', 'telephone', 'website', 'email'], 'string', 'max' => 200],
            [['file'],'file'],
            [['file'],'file','extensions'=>'jpg,gif,png,jpeg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'gender' => 'Gender',
            'date_of_birth' => 'Date Of Birth',
            'years_of_experience' => 'Years Of Experience',
            'Industry' => 'Industry',
            'location' => 'Location',
            'about_me' => 'About Me',
            'file' => 'Profile Picture',
            'professional_title' => 'Professional Title',
            'career_level' => 'Career Level',
            'commuication_level' => 'Commuication Level',
            'organizational_level' => 'Organizational Level',
            'job_related_level' => 'Job Related Level',
            'address' => 'Address',
            'telephone' => 'Telephone',
            'website' => 'Website',
            'email' => 'Email',
        ];
    }
}
