<?php

namespace Aminetiyal\LaravelAdminlte\Tests;

use Aminetiyal\LaravelAdminlte\AdminlteServiceProvider;
use Illuminate\Support\Str;
use Orchestra\Testbench\TestCase as Orchestra;
use ReflectionClass;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('view:clear');
    }

    protected function getPackageProviders()
    {
        return [AdminlteServiceProvider::class];
    }

    public function rendered(string $component, array $data = [])
    {
        [$data, $attributes] = $this->partitionDataAndAttributes($component, $data);

        $component = $this->app->make($component, $data->all());

        $component->withAttributes($attributes->all());

        $view = $component->resolveView();

        $view->with($component->data());

        return trim($view->render());
    }

    protected function partitionDataAndAttributes($class, array $attributes)
    {
        $constructor = (new ReflectionClass($class))->getConstructor();

        $parameterNames = $constructor
            ? collect($constructor->getParameters())->map->getName()->all()
            : [];

        return collect($attributes)->partition(function ($value, $key) use ($parameterNames) {
            return in_array(Str::camel($key), $parameterNames);
        });
    }

    public function sanitize_output($buffer)
    {
        // strip whitespaces after tags, except space
        // strip whitespaces before tags, except space
        // shorten multiple whitespace sequences
        // Remove HTML comments
        $search = ['/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s', '/<!--(.|\s)*?-->/'];

        $replace = ['>', '<', '\\1', ''];

        $buffer = preg_replace($search, $replace, $buffer);

        return $buffer;
    }
}
