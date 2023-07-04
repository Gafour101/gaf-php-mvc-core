<?php
/** User: Gafour Tech **/

namespace gaf\phpmvc\exception;
use Exception;
/**

    * Class NotFoundException
    *
    * @author Gafour Panolong <gafopanolong.gafour@s.msumain.edu.ph>
    * @package gaf\phpmvc\exception
    
**/

class NotFoundException extends Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}