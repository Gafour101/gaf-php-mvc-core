<?php
/** User: Gafour Tech **/

namespace gaf\phpmvc\form;

use gaf\phpmvc\Model;
/**

    * Class Field
    *
    * @author Gafour Panolong <gafopanolong.gafour@s.msumain.edu.ph>
    * @package gaf\phpmvc\form
    
**/

abstract class BaseField
{
    abstract public function renderInput(): string;
    
    
    public Model $model;
    public string $attribute;
    /**
     * Field constructor
     * 
     * @param \gaf\phpmvc\Model $model
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