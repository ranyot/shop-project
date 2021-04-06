<?php

namespace backend\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $body
 * @property string $poster
 * @property string $created_at
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    public function behaviors()
    {
        return [
            [
           'class'=>SluggableBehavior::className(),
           'attribute'=>'title',
           'ensureUnique'=>true,
        ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'body', 'poster'], 'required'],
            [['body'], 'string'],
            [['created_at'], 'safe'],
            [['title', 'slug', 'poster'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'body' => 'Body',
            'poster' => 'Poster',
            'created_at' => 'Created At',
        ];
    }
}
