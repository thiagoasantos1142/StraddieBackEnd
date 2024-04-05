<?php

namespace App\View\Components\V1\Admin\Modal;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CreateAddress extends Component
{
    public $userId;
    public $organizationId;
    /**
     * Create a new component instance.
     */
    public function __construct($userId = null, $organizationId = null)
    {
        $this->userId = $userId;
        $this->organizationId = $organizationId;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.v1.admin.modal.create-address');
    }
}
