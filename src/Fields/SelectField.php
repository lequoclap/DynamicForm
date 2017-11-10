<?php

namespace DynamicFormManager\Fields;


use DynamicFormManager\Widgets\Select;

class SelectField extends Field
{

    public $widget = Select::class;
    protected $defaultOption = [
        'required' => false,
        'widget' => null,
        'label' => null,
        'initial' => null,
        'helpText' => null,
        'errorMessages' => null,
        'validators' => [],
        'disabled' => null,
        'labelSuffix' => null,
        'remarks' => null,
        'wrap_label' => true,
        'defaultValue' => ''
    ];

    public function __construct($options)
    {
        $this->defaultOption['choices'] = [];
        $newOptions = array_merge($this->defaultOption, $options);
        parent::__construct($newOptions);
        $newOptions['choices'] = ['' => $newOptions['defaultValue']] + $newOptions['choices'];
        $this->widget->choices = $newOptions['choices'];
    }
}