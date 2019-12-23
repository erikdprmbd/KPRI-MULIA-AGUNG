<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[JenisSimpanan]].
 *
 * @see JenisSimpanan
 */
class JenisSimpananQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return JenisSimpanan[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return JenisSimpanan|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
