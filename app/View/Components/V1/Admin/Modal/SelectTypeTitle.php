<?php

namespace App\View\Components\V1\Admin\Modal;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectTypeTitle extends Component
{

    public $id;
    /**
     * Create a new component instance.
     */
    public function __construct(int $id = null)
    {
        //
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.v1.admin.modal.select-type-title');
    }
}
