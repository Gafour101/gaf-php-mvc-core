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

class InputField extends BaseField
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';

    public string $type;
    public Model $model;
    public string $attribute;

    /**
     * Field constructor
     * 
     * @param \gaf\phpmvc\Model $model
     * @param string          $attribute
     */

    public function __construct(\gaf\phpmvc\Model $model, string $attribute)
    {   
        $this->type = self::TYPE_TEXT;
        parent::__construct($model, $attribute);
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function renderInput(): string
    {   
        return sprintf('<input type="%s" name="%s" value="%s" class="form-control%s">',
            $this->type,
            $this->attribute,
            $this->model->{$this->attribute},
            $this->model->hasError($this->attribute) ? ' is_invalid' : '',
        );
    }
}