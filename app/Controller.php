<?php

namespace App;

class Controller {

    protected $viewPath = '../app/Views/';
    protected $template = 'default';

    public function render($view, $variables = array()){
        ob_start();
        extract($variables);
        require($this->viewPath.$view.'.php');
        $content = ob_get_clean();
        require($this->viewPath.'template/'.$this->template.'.php');
    }

}