<?php

namespace VCComponent\Laravel\ViewModel\ViewModels;

use Closure;
use Illuminate\Contracts\Support\Arrayable;
use ReflectionClass;
use ReflectionMethod;
use ReflectionObject;
use ReflectionProperty;

class BaseViewModel implements Arrayable
{
    public function toArray()
    {
        $publicMethods = $this->getPublicMethods();
        $publicProps   = $this->getPublicProperties();

        return array_merge($publicProps, $publicMethods);
    }

    protected function getPublicProperties()
    {
        $publicProps = (new ReflectionObject($this))->getProperties(ReflectionProperty::IS_PUBLIC);

        $keys = array_map(function ($item) {
            return $item->getName();
        }, $publicProps);

        $values = array_map(function ($key) {
            return $this->$key;
        }, $keys);

        return array_combine($keys, $values);
    }

    protected function getPublicMethods()
    {
        $publicMethods = (new ReflectionClass($this))->getMethods(ReflectionMethod::IS_PUBLIC);

        $keys = array_map(function ($item) {
            return $item->getName();
        }, $publicMethods);

        $key_except = array_diff($keys, ['toArray', '__construct']);

        $values = array_map(function ($key) {
            $method_param_number = (new ReflectionMethod($this, $key))->getNumberOfParameters();
            if ($method_param_number === 0) {
                return call_user_func(array($this, $key));
            }
            return Closure::fromCallable([$this, $key]);
        }, $key_except);

        return array_combine($key_except, $values);
    }
}
