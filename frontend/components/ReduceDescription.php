<?php

namespace frontend\components;
use yii\base\Widget;
use yii\helpers\Html;

class ReduceDescription  extends Widget
{
    public $body;
    public $count = 50;

    public function init()
    {
        parent::init(); 
        $description = $this->body;
        $descr = explode(" ", $this->body);
        if(count($descr)<=$this->count){
            $this->body;
        }else{
            array_splice($descr, $this->count);
            $this->body = imlode(" ",$this->body).'....';
        }

    }

    public function run()
    {
        return Html::decode($this->body, $this->count);
    }


}
?>