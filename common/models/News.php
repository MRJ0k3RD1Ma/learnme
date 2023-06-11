<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property int|null $cat_id
 * @property string|null $name
 * @property string|null $short
 * @property string|null $long
 * @property string|null $image
 * @property string|null $created
 * @property string|null $updated
 * @property int|null $user_id
 *
 * @property Category $cat
 * @property NewsTag[] $newsTags
 * @property User $user
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_id', 'user_id'], 'integer'],
            [['short', 'long'], 'string'],
            [['created', 'updated'], 'safe'],
            [['name', 'image'], 'string', 'max' => 255],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['cat_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_id' => 'Bo`lim',
            'name' => 'Sarlavha',
            'short' => 'Qisqa matn',
            'long' => 'To`liq matn',
            'image' => 'Rasm',
            'created' => 'Yaratildi',
            'updated' => 'O`zgartirildi',
            'user_id' => 'Avtor',
        ];
    }

    /**
     * Gets query for [[Cat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(Category::class, ['id' => 'cat_id']);
    }

    /**
     * Gets query for [[NewsTags]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNewsTags()
    {
        return $this->hasMany(NewsTag::class, ['news_id' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}
