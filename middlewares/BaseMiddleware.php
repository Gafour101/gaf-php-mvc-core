<?php
/** User: Gafour Tech **/

namespace gaf\phpmvc\middlewares;

/**

    * Class BaseMiddleware
    *
    * @author Gafour Panolong <gafopanolong.gafour@s.msumain.edu.ph>
    * @package gaf\phpmvc\middlewares
    
**/

abstract class BaseMiddleware 
{
    abstract public function execute();
}