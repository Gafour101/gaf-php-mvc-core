<?php
/** User: Gafour Tech **/

namespace app\core\exception;
use Exception;
/**

    * Class NotFoundException
    *
    * @author Gafour Panolong <gafopanolong.gafour@s.msumain.edu.ph>
    * @package app\core\exception
    
**/

class NotFoundException extends Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}