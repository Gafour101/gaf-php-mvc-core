<?php
/** User: Gafour Tech ...**/

namespace app\core;

use app\core\db\DbModel;
/**

    * Class Application
    *
    * @author Gafour Panolong <gafopanolong.gafour@s.msumain.edu.ph>
    * @package app\core
    
**/

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}