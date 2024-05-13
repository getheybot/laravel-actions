<?php

namespace Heybot\LaravelActions;

use Heybot\LaravelActions\Concerns\AsObject;
use Illuminate\Foundation\Http\FormRequest;

class LaravelActions extends FormRequest
{
    use AsObject;

    protected array $middleware = [];

    public function __construct(array $query = [], array $request = [], array $attributes = [], array $cookies = [], array $files = [], array $server = [], $content = null)
    {
        parent::__construct($query, $request, $attributes, $cookies, $files, $server, $content);

        if (method_exists($this, 'middleware')) {
            $this->middleware = array_merge($this->middleware, $this->middleware());
        }
    }

    /**
     * Called before any routing method. We will use it to trigger
     * the steps to refresh the request and authorization
     */
    public function callAction(string $method, array $parameters): mixed
    {
        $this->prepareActionClass();

        return $this->{$method}(...array_values($parameters));
    }

    private function prepareActionClass(): void
    {
        $this->checkDefaultAuthorize();
        $this->refreshRequestAndAuthorize();
    }

    /**
     * we bind inside the container the method `authorize` returning true (or value in config)
     * to avoid unexpected error if `authorize` method does not exists in a controller
     */
    private function checkDefaultAuthorize(): void
    {
        if (method_exists(get_called_class(), 'authorize')) {
            return;
        }

        if (! boolval(config('actions.authorize'))) {
            $this->failedAuthorization();
        }
    }
}
