<?php
/** User: Gafour Tech ...**/

namespace app\core;

/**

    * Class Application
    *
    * @author Gafour Panolong <gafopanolong.gafour@s.msumain.edu.ph>
    * @package app\core
    
**/

class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect(string $url)
    {
        header('Location: '.$url);
    }
}