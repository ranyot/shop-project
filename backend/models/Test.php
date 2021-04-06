<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property int $id
 * @property string $email
 * @property string $title
 * @property string $created_at
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'title'], 'required'],
            [['created_at'], 'safe'],
            [['email'], 'string', 'max' => 100],
            [['title'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'title' => 'Title',
            'created_at' => 'Created At',
        ];
    }

    public static function getDb()
    {
        $database = 'dbsecond';
        return Yii::$app->$database;
    }

    public static function setDatabase($database)
    {
        self::$database = $database;
    }
}
