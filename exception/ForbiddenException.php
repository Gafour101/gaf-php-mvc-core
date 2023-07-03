<?php
/** User: Gafour Tech **/

namespace app\core\exception;
use Exception;
/**

    * ForbiddenException
    *
    * @author Gafour Panolong <gafopanolong.gafour@s.msumain.edu.ph>
    * @package app\core\exception
    
**/

class ForbiddenException extends Exception
{
    protected $message = 'You are not allowed to access this page';
    protected $code = 403;
}