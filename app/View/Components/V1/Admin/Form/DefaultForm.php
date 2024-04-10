<?php

namespace App\View\Components\V1\Admin\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DefaultForm extends Component
{
    public $pathName;
    /**
     * Create a new component instance.
     */
    public function __construct($pathName = null)
    {
        $this->pathName = $pathName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.v1.admin.form.default-form');
    }
}
