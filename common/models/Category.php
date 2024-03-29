<?php

namespace common\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "category".
 *
 * @property string $id
 * @property string $name
 * @property string $parent_id
 * @property int $depth
 *
 * @property CategoryParam[] $categoryParams
 * @property Product[] $products
 */
class Category extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'depth'], 'required'],
            [['id', 'parent_id'], 'string'],
            [['depth'], 'default', 'value' => null],
            [['depth'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['id'], 'unique'],
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
            'parent_id' => 'Parent ID',
            'depth' => 'Depth',
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getCategoryParams()
    {
        return $this->hasMany(CategoryParam::class, ['category_id' => 'id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::class, ['category_id' => 'id']);
    }
}
