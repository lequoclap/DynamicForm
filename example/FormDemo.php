<?php
/**
 * Created by PhpStorm.
 * User: letuananh
 * Date: 6/6/17
 * Time: 19:30:07
 */

namespace App\Http\Controllers;


use DynamicFormManager\Fields\CharField;
use DynamicFormManager\Fields\MultipleSelectField;
use DynamicFormManager\Fields\SelectField;
use DynamicFormManager\Fields\ZipField;
use DynamicFormManager\Forms\Form;
use DynamicFormManager\Widgets\TextInput;

class FormDemo extends Form
{
    public function buildFields()
    {
        $this->fields['prefecture'] = new SelectField([
            'choices' => [1 => 'a', 2 => 'b'],
            'required' => true,
            'label' => 'abc',
        ]);


        $this->fields['city'] = new CharField([
            'widget' => new TextInput([
                'placeholder' => '市区町村',
                'class' => 'form-control'
            ]),
            'required' => true,
            'label' => 'cef',
            'validators' => ['string', 'max:256']
        ]);

        $this->fields['multi_select'] = new MultipleSelectField([
            'choices' => [1 => '1', 2 => 'abc'],
            'required' => true,
            'label' => '第三者検査',
        ]);


        $this->fields['zip'] = new ZipField([
            'label' => 'zip',
            'required' => true,
            'remarks' => 'zip input'
        ]);


    }
}