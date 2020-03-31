<?php

namespace VCComponent\Laravel\ViewModel\Test\Unit;

use Illuminate\Contracts\Support\Arrayable;
use VCComponent\Laravel\ViewModel\Test\Stubs\ViewModels\DemoViewModel;
use VCComponent\Laravel\ViewModel\Test\TestCase;
use VCComponent\Laravel\ViewModel\ViewModels\BaseViewModel;

class BaseViewModelTest extends TestCase
{
    /**
     * @test
     */
    public function must_implement_arrayable()
    {
        $baseViewModel = new BaseViewModel();

        $this->assertInstanceOf(Arrayable::class, $baseViewModel);
    }

    /**
     * @test
     */
    public function can_return_public_property_when_calling_to_array_method()
    {
        $post    = 'post';
        $product = 'product';

        $viewModel = new DemoViewModel($post, $product);
        $result    = $viewModel->toArray();

        $this->assertTrue(!array_key_exists('privateProp', $result));
        $this->assertTrue(!array_key_exists('protectedProp', $result));
        $this->assertTrue(array_key_exists('publicProp', $result));
        $this->assertTrue(array_key_exists('post', $result));
        $this->assertTrue(array_key_exists('product', $result));
        $this->assertSame($result['publicProp'], $viewModel->publicProp);
        $this->assertSame($result['post'], $post);
        $this->assertSame($result['product'], $product);
    }

    /**
     * @test
     */
    public function can_return_public_method_when_calling_to_array_method()
    {
        $post    = 'post';
        $product = 'product';

        $viewModel = new DemoViewModel($post, $product);
        $result    = $viewModel->toArray();

        $this->assertTrue(!array_key_exists('privateMethod', $result));
        $this->assertTrue(!array_key_exists('protectedMethod', $result));
        $this->assertTrue(array_key_exists('publicMethod', $result));
        $this->assertSame($result['publicMethod'], $viewModel->publicMethod());
    }

    /**
     * @test
     */
    public function can_return_public_method_with_params_when_calling_to_array_method()
    {
        $post    = 'post';
        $product = 'product';
        $param   = 'abc';

        $viewModel = new DemoViewModel($post, $product);
        $result    = $viewModel->toArray();

        $this->assertSame($result['publicMethodWithParams']($param), $viewModel->publicMethodWithParams($param));
    }
}
