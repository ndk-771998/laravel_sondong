<?php

namespace VCComponent\Laravel\ViewModel\Test\Stubs\ViewModels;

use VCComponent\Laravel\ViewModel\ViewModels\BaseViewModel;

class DemoViewModel extends BaseViewModel
{
    protected $privateProp = 'private property';

    protected $protectedProp = 'protected property';

    public $publicProp = 'public prop';

    public $post;

    public $product;

    public function __construct($post, $product)
    {
        $this->post    = $post;
        $this->product = $product;
    }

    private function privateMethod()
    {
        return 'private method';
    }

    protected function protectedMethod()
    {
        return 'protected method';
    }

    public function publicMethod()
    {
        return 'public method';
    }

    public function publicMethodWithParams($item)
    {
        return $item;
    }
}
