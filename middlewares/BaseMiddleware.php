<?php
/** User: Gafour Tech **/

namespace app\core\middlewares;

/**

    * Class BaseMiddleware
    *
    * @author Gafour Panolong <gafopanolong.gafour@s.msumain.edu.ph>
    * @package app\core\middlewares
    
**/

abstract class BaseMiddleware 
{
    abstract public function execute();
}