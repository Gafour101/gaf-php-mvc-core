<?php
/** User: Gafour Tech **/

namespace app\core\form;

use app\core\Model;
/**

    * Class Application
    *
    * @author Gafour Panolong <gafopanolong.gafour@s.msumain.edu.ph>
    * @package app\core\form
    
**/

class Form 
{
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        echo '</form>';
    } 

    public function field(Model $model, $attribute)
    {
        return new InputField($model, $attribute);
    }
}