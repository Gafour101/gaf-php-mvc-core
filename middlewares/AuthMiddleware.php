<?php
/** User: Gafour Tech **/

namespace app\core\middlewares;
use app\core\Application;
use app\core\exception\ForbiddenException;

/**

    * Class BaseMiddleware
    *
    * @author Gafour Panolong <gafopanolong.gafour@s.msumain.edu.ph>
    * @package app\core\middlewares
    
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