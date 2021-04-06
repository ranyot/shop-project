<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contact_form".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $subject
 * @property string|null $body
 * @property string|null $created_at
 */
class ContactForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact_form';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'body'], 'required'],
            [['body'], 'string'],
            // [['subject'], 'integer', 'message'=>'Bu yerga son kiriting'],
            [['created_at'], 'safe'],
            ['email', 'email'],
            [['name', 'email'], 'string', 'max' => 100],
            // [['subject'], 'string', 'min' => 10],
            [['subject'], 'url', 'defaultScheme'=>'https'],
            [['email'],'unique', 'message'=>'Email is already taken by another user '],
            [['name'], 'compare', 'compareAttribute'=>'email']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'subject' => 'Subject',
            'body' => 'Body',
            'created_at' => 'Created At',
        ];
    }
}
