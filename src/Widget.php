<?php

namespace mattstauffer\happybrad;

use Craft;

class Widget extends \craft\base\Widget
{
    protected $omg_so_handsome = 'https://i.imgur.com/WbKwPij.jpg';

    public static function displayName(): string
    {
        return 'Happy Brad';
    }

    public static function iconPath()
    {
        return __DIR__.'/icon-mask.svg';
    }

    public function getBodyHtml()
    {
        $css = <<<CSS
#widget{$this->id} h2 { display: none; }
#widget{$this->id} img { display: block; border-radius: 2px; }
CSS;
        Craft::$app->view->registerCss($css);
        return '<img src="'.$this->omg_so_handsome.'" alt="OMG so handsome" width="100%">';
    }
}
