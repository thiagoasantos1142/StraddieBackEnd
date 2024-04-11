<?php

namespace App\View\Components\V1\Admin\Modal;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AddCorporateUser extends Component
{
    public $organizationId;
    public $usersOrganization;
    /**
     * Create a new component instance.
     */
    public function __construct($organizationId = null, $usersOrganization = null)
    {
        //
        $this->organizationId = $organizationId;
        $this->usersOrganization = $usersOrganization;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.v1.admin.modal.add-corporate-user');
    }
}
