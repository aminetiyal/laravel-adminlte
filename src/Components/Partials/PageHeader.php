<?php

namespace Aminetiyal\LaravelAdminlte\Components\Partials;

use Illuminate\View\Component;

class PageHeader extends Component
{
    public string $title;

    public array $breadcrumb;

    public function __construct(
        string $title = "Page",
        array $breadcrumb = []
    ) {
        $this->title = $title;
        $this->breadcrumb = $breadcrumb;
    }

    public function render()
    {
        return view('adminlte::components.partials.page-header');
    }


    public function hasBreadcrumb()
    {
        return $this->breadcrumb !== [];
    }
}
