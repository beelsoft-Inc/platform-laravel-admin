<?php

namespace Tungnt\Admin\Form\Field;

use Tungnt\Admin\Form\Field;

class Editor extends Field
{
    protected static $js = [
        '//cdn.ckeditor.com/4.5.10/standard/ckeditor.js',
    ];

    public function render()
    {
        $this->script = "CKEDITOR.replace('{$this->id}');";

        return parent::render();
    }
}
