<?php

namespace Aminetiyal\LaravelAdminlte\Components\Partials;

use Illuminate\View\Component;

class Footer extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('adminlte::components.partials.footer');
    }
}
