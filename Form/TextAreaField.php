<?php
/** User: Gafour Tech **/

namespace app\core\form;

use app\core\Model;
/**

    * Class Field
    *
    * @author Gafour Panolong <gafopanolong.gafour@s.msumain.edu.ph>
    * @package app\core\form
    
**/

class TextAreaField extends BaseField
{   
    public function renderInput(): string
    {
        return sprintf('<textarea name="%s" class="form-control%s"> %s</textarea>',
            $this->attribute,
            $this->model->hasError($this->attribute) ? ' is-invalid ' : '',
            $this->model->{$this->attribute},
        );
    }
       
}
