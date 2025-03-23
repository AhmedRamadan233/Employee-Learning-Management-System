<?php

namespace App\View\Components\Input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextArea extends Component
{
    public $name;
    public $label;
    public $placeholder;
    public $value;
    public $id;
    public $required;
    public $wrapperClass;

    public function __construct(
        $name,
        $label = '',
        $placeholder = '',
        $value = '',
        $id = '',
        $required = false,
        $wrapperClass = 'col-md-12 mb-3'
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->id = $id;
        $this->required = $required;
        $this->wrapperClass = $wrapperClass;
    }

    public function render(): View|Closure|string
    {
        return view('components.input.text-area');
    }
}
