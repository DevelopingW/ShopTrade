<?php
Yii::setAlias('@defaultDir', realpath(dirname(__DIR__) . DIRECTORY_SEPARATOR . '..'));
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@core', dirname(__DIR__) . '/core');
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('@temp', dirname(__DIR__) . '/temp');