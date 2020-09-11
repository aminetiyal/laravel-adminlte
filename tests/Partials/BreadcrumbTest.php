<?php

namespace Aminetiyal\LaravelAdminlte\Tests\Partials;

use Aminetiyal\LaravelAdminlte\Components\Partials\Breadcrumb;
use Aminetiyal\LaravelAdminlte\Tests\TestCase;

class BreadcrumbTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function the_component_can_be_rendered()
    {
        $expected = <<<HTML
<ol class="breadcrumb float-sm-right"> <li class="breadcrumb-item"><a href="/link">NAME</a></li> </ol>
HTML;

        $compiled = $this->rendered(Breadcrumb::class, ['links' =>  [['name' => 'NAME', 'link' => '/link']]]);

        $this->assertSame($this->sanitize_output($expected), $this->sanitize_output($compiled));

    }
}
