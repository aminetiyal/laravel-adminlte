<?php

namespace Aminetiyal\LaravelAdminlte\Components\Partials;

use Illuminate\View\Component;

class Breadcrumb extends Component
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
        return view('adminlte::components.partials.breadcrumb');
    }
}
