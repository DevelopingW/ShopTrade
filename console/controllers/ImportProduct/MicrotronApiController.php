<?php

namespace console\controllers\ImportProduct;

use yii\helpers\Console;
use console\models\app\microtron\api\CurlConnect;

/**
 *
 */
class MicrotronApiController extends \console\models\system\abstracts\Controller
{
    private string $token;

    public function init()
    {
        parent::init();

        $this->token = $_ENV['MicrotronApiToken'];
    }

    // Команда "yii ImportProduct/microtron-api/courses ua"
    /**
     *
     * "m" - Курс межбанка
     * "s" - Курс улицы
     *
     * @return void
     */
    public function actionCourses()
    {
        $url = 'https://api.microtron.ua/courses';
        $data = ['token' => $this->token];

        $result = CurlConnect::curlConnect($url, $data);

        $this->stdout(print_r($result, 1) . "\n");
    }

    // Команда "yii ImportProduct/microtron-api/categories ua"
    // $lang может быть ru, ua
    /**
     * @param string $lang
     * @return void
     */
    public function actionCategories(string $lang = 'ua')
    {
        $url = 'https://api.microtron.ua/categories';
        $data = ['token' => $this->token, 'lang' => $lang];

        $result = CurlConnect::curlConnect($url, $data);

        $this->stdout(print_r($result, 1) . "\n");
    }

    // Команда "yii ImportProduct/microtron-api/products ua"
    // $lang может быть ru, ua
    /**
     * @param string $lang
     * @return void
     */
    public function actionProducts(string $lang = 'ua')
    {
        $url = 'https://api.microtron.ua/products';
        $data = ['token' => $this->token, 'lang' => $lang];

        $result = CurlConnect::curlConnect($url, $data);

        $this->stdout(print_r($result, 1) . "\n");
    }

    // Команда "yii example/add test" викличе "actionAdd(['test'])"
    // Команда "yii example/add test1,test2" викличе "actionAdd(['test1', 'test2'])"
//    public function actionAdd(array $name)
//    {
//        $this->stdout("Hello?\n", Console::FG_YELLOW);
//    }
}