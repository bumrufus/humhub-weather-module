<?php

namespace humhub\modules\weather\widgets;

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\components\Widget;

/**
 *
 * @author Felli
 */
class WeatherFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $url = Yii::$app->getModule('weather')->getServerUrl() . '/';
        return $this->render('weatherframe', ['weatherUrl' => $url]);
    }
}
