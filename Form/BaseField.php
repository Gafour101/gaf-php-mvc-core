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

abstract class BaseField
{
    abstract public function renderInput(): string;
    
    
    public Model $model;
    public string $attribute;
    /**
     * Field constructor
     * 
     * @param \app\core\Model $model
     * @param string          $attribute
     */

    public function __construct(Model $model, string $attribute)
    {   
        $this->model = $model;
        $this->attribute = $attribute;
    }
    
    public function __toString()
    {
        return sprintf('
            <div class="form-group">
                <label>%s</label>
                %s
                <div>
                    <p style="color: red; font-size: 0.75rem;">%s</p>
                </div>
            </div>
        ',
            $this->model->getLabel($this->attribute),
            $this->renderInput(),
            $this->model->getFirstError($this->attribute)
        );
    }
}