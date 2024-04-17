<?php

namespace App\View\Components\V1\Admin\Modal;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class AddPhone extends Component
{
    public $id;
    public $showData;
    public $keys;

    /**
     * Create a new component instance.
     */
    public function __construct(string $id, Collection $showData, array $keys)
    {
        //
        $this->id = $id;
        $this->showData = $showData;
        $this->keys = $keys;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.v1.admin.modal.add-phone');
    }
}
