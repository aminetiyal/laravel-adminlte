<?php

namespace Aminetiyal\LaravelAdminlte\Components\Partials;

use Illuminate\View\Component;

class Styles extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('adminlte::components.partials.styles');
    }
}
