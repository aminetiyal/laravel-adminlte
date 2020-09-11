<?php

namespace Aminetiyal\LaravelAdminlte\Components\Partials;

use Illuminate\View\Component;


class SidebarMenu extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('adminlte::components.partials.sidebar-menu');
    }
}
