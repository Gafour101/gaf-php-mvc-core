<?php
/** User: Gafour Tech **/

namespace gaf\phpmvc\middlewares;
use gaf\phpmvc\Application;
use gaf\phpmvc\exception\ForbiddenException;

/**

    * Class BaseMiddleware
    *
    * @author Gafour Panolong <gafopanolong.gafour@s.msumain.edu.ph>
    * @package gaf\phpmvc\middlewares
    
**/

class AuthMiddleware extends BaseMiddleware
{   
    public array $actions = [];

    /**
     * AuthMiddleware constructor
     * 
     * @param array @actions
     */
    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if(Application::isGuest())
        {
            if(empty($this->actions) || in_array(Application::$app->controller->action, $this->actions))
            {
                throw new ForbiddenException();
            }
        }
    }
}