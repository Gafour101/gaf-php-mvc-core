<?php
/** User: Gafour Tech **/

namespace app\core;
use app\core\Application;
use app\core\middlewares\BaseMiddleware;

/**

    * Class Application
    *
    * @author Gafour Panolong <gafopanolong.gafour@s.msumain.edu.ph>
    * @package app\core
    
**/

class Controller 
{   
    public string $layout = 'main';
    public string $action = '';
    /**
     * @var \app\core\middlewares\BaseMiddleware[]
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
     * @return \app\core\middlewares\BaseMiddleware[]
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}