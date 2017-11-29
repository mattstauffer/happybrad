<?php

namespace mattstauffer\happybrad;

use craft\events\RegisterComponentTypesEvent;
use craft\services\Dashboard;
use yii\base\Event;

class Plugin extends \craft\base\Plugin
{
    public function init()
    {
        Event::on(Dashboard::class, Dashboard::EVENT_REGISTER_WIDGET_TYPES, function(RegisterComponentTypesEvent $e) {
            $e->types[] = Widget::class;
        });
    }
}
