<?php

namespace console\models\system\abstracts;

/**
 *
 */
abstract class Controller extends \yii\console\Controller
{
    public function init()
    {
        if (file_exists(\Yii::getAlias('@defaultDir') . '/.env')) {
            $dotEnv = new \Symfony\Component\Dotenv\Dotenv();
            $dotEnv->load(\Yii::getAlias('@defaultDir') . '/.env');
        }

        parent::init();
    }
}