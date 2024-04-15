<?php

namespace App\View\Components\V1\Admin\Modal;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AddCorporateUser extends Component
{
    public $showData;
    public $dataComponent;
    /**
     * Create a new component instance.
     */
    public function __construct($showData, $dataComponent)
    {
        //
        $this->showData = $showData;
        $this->dataComponent = $dataComponent;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.v1.admin.modal.add-corporate-user');
    }
}
