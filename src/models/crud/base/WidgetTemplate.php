<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace hrzg\widget\models\crud\base;

use Yii;

/**
 * This is the base-model class for table "app_hrzg_widget_template".
 *
 * @property int $id
 * @property string $name
 * @property string $json_schema
 * @property string $twig_template
 */
abstract class WidgetTemplate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%hrzg_widget_template}}';
    }

    /**
     * {@inheritdoc}
     *
     * @return \hrzg\widget\models\crud\query\WidgetTemplateQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \hrzg\widget\models\crud\query\WidgetTemplateQuery(get_called_class());
    }

    /**
     * Alias name of table for crud viewsLists all Area models.
     * Change the alias name manual if needed later.
     *
     * @return string
     */
    public function getAliasModel($plural = false)
    {
        if ($plural) {
            return Yii::t('widgets', 'WidgetTemplates');
        } else {
            return Yii::t('widgets', 'WidgetTemplate');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'php_class', 'json_schema'], 'required'],
            [['json_schema', 'twig_template'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('widgets', 'ID'),
            'name' => Yii::t('widgets', 'Name'),
            'json_schema' => Yii::t('widgets', 'Json Schema'),
            'twig_template' => Yii::t('widgets', 'Twig Template'),
            'created_at' => Yii::t('widgets', 'Created At'),
            'updated_at' => Yii::t('widgets', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeHints()
    {
        return array_merge(
            parent::attributeHints(),
            [
                'id' => Yii::t('widgets', 'ID'),
                'name' => Yii::t('widgets', 'Name'),
                'json_schema' => Yii::t('widgets', 'Json Schema'),
                'twig_template' => Yii::t('widgets', 'Template'),
            ]);
    }
}
