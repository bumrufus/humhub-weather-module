<?php

namespace humhub\modules\weather\models;

use Yii;

/**
 * ConfigureForm defines the configurable fields.
 */
class ConfigureForm extends \yii\base\Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => 'Forecast7 Weather URL:'
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => 'e.g. https://forecast7.com/{language}/{id}'
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('weather')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('weather')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}
