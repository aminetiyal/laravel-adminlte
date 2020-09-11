<?php

namespace Aminetiyal\LaravelAdminlte\Components\Partials;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public function __construct()
    {

    }

    public function render()
    {
        return view('adminlte::components.partials.sidebar');
    }
}
