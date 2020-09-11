<?php

namespace Aminetiyal\LaravelAdminlte\Components\Partials;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $links;

    /**
     * ['name' => 'NAME', 'link' => '/link']
     */
    public function __construct($links = [])
    {
        $this->links = $links;
    }

    public function render()
    {
        return view('adminlte::components.partials.navbar');
    }
}
