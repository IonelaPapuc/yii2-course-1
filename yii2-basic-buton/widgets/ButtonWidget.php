<?php
namespace app\widgets;
use yii\base\widget;
class ButtonWidget extends Widget{
    public function init()
    {
        parent::init();
    }
    public function run()
    {
        parent::run();
        return'<button>Click me</button>';
    }
}