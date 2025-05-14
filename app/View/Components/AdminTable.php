<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminTable extends Component
{
    public $tableInfo;
    public $columns;
    public $routeCreate;
    public $routeEdit;
    /**
     * Create a new component instance.
     */
    public function __construct($tableInfo, $columns, $routeCreate, $routeEdit)
    {
        $this->tableInfo = $tableInfo;
        $this->columns = $columns;
        $this->routeCreate = $routeCreate;
        $this->routeEdit = $routeEdit;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin-table', ['tableInfo' => $this->tableInfo]);
    }
}
