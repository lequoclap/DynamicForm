<?php
namespace DynamicFormManager\Fields;

use DynamicFormManager\Widgets\HiddenWidget;

class HiddenField extends  Field
{
    public $wrap_label = false;
    public $widget = HiddenWidget::class;


}