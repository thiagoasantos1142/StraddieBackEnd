<?php

namespace App\View\Components\V1\Admin\Modal;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AddCorporateUser extends Component
{
    public $dataBase;
    public $userId;
    public $organizationId;
    /**
     * Create a new component instance.
     */
    public function __construct($dataBase, $organizationId = null, $userId = null)
    {
        //
        $this->organizationId = $organizationId;
        $this->userId = $userId;
        $this->dataBase = $dataBase;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.v1.admin.modal.add-corporate-user');
    }
}
