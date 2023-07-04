<?php
/** User: Gafour Tech ...**/

namespace gaf\phpmvc;

use gaf\phpmvc\db\DbModel;
/**

    * Class Application
    *
    * @author Gafour Panolong <gafopanolong.gafour@s.msumain.edu.ph>
    * @package gaf\phpmvc
    
**/

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}