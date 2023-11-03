<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property string $title
 * @property string $category
 * @property int $price
 * @property int $available_quantity
 * @property string $thumbnail
 * @property string $permalink
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'category', 'price', 'available_quantity', 'thumbnail', 'permalink'], 'required'],
            [['title', 'category', 'thumbnail', 'permalink'], 'string'],
            [['price', 'available_quantity'], 'integer'],
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
            'category' => 'Category',
            'price' => 'Price',
            'available_quantity' => 'Available Quantity',
            'thumbnail' => 'Thumbnail',
            'permalink' => 'Permalink',
        ];
    }
}
