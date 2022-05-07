<?php

namespace MF\Controller;

use stdClass;
use Exception;

abstract class Action
{
    protected $view;

    public function __construct()
    {
        $this->view = new stdClass();
    }

    protected function render($view, $layout)
    {
        $this->view->page = $view;

        if (file_exists("../App/Views/template/{$layout}.phtml")) {
            require_once "../App/Views/template/{$layout}.phtml";
        } else {
            $this->content();
            throw new Exception("Layout {$layout} não encontrado.");
        }
    }

    protected function content()
    {

        $classActual = get_class($this);
        $classActual = str_replace('App\\Controllers\\', '', $classActual);
        $classActual = strtolower(str_replace('Controller', '', $classActual));

        $dir = '../App/Views/' . $classActual . '/' . $this->view->page . '.phtml';

        if (file_exists($dir)) {
            require_once $dir;
        }
    }
}
