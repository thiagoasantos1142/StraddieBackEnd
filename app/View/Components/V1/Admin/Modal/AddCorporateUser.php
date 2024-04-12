<?php

namespace App\View\Components\V1\Admin\Modal;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AddCorporateUser extends Component
{
    public $dataBase;
    public $customRequest;
    /**
     * Create a new component instance.
     */
    public function __construct($dataBase, $customRequest = null)
    {
        //
        $this->dataBase = $dataBase;
        $this->customRequest = $customRequest;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.v1.admin.modal.add-corporate-user');
    }
}
