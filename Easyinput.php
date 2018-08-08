<?php

namespace guopee;

use yii\widgets\InputWidget;
use guopee\Assets;

class Easyinput extends InputWidget
{
    public $configs;
    public $grid_id;

    public function init()
    {
        parent::init();
        Assets::register($this->getView());
    }

    public function run()
    {

        $render_data = [
            'attribute' => $this->attribute,
            'model' => $this->model,
            'grid_id'=>$this->grid_id
        ];
        !empty($this->configs) && $render_data['configs'] = json_encode($this->configs);
        return $this->render('grid', $render_data);
    }

}
