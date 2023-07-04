<?php
/** User: Gafour Tech **/

namespace gaf\phpmvc;
use gaf\phpmvc\Application;
use gaf\phpmvc\middlewares\BaseMiddleware;

/**

    * Class Application
    *
    * @author Gafour Panolong <gafopanolong.gafour@s.msumain.edu.ph>
    * @package gaf\phpmvc
    
**/

class Controller 
{   
    public string $layout = 'main';
    public string $action = '';
    /**
     * @var \gaf\phpmvc\middlewares\BaseMiddleware[]
     */
    protected array $middlewares = []; 

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
    public function render($view, $params = []) 
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * @return \gaf\phpmvc\middlewares\BaseMiddleware[]
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}