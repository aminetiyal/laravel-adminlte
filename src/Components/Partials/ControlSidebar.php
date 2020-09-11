<?php

namespace Aminetiyal\LaravelAdminlte\Components\Partials;

use Illuminate\View\Component;

class ControlSidebar extends Component
{
    /* array([ 'title' => 'url']) */
    public $items = [];

    public function __construct($items = [])
    {
        $this->items = $items;
    }

    public function render()
    {
        return view('adminlte::components.partials.control-sidebar');
    }
}
