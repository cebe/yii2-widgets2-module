<?php

namespace hrzg\widget\models\crud\query;

/**
 * This is the ActiveQuery class for [[\hrzg\widget\models\crud\Widget]].
 *
 * @see \hrzg\widget\models\crud\Widget
 */
class WidgetQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \hrzg\widget\models\crud\Widget[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \hrzg\widget\models\crud\Widget|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}