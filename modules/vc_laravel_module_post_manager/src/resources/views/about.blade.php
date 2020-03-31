@if (method_exists($view_model, 'test'))
    {!! $view_model->test() !!}
@endif

<h1>This is about detail (id = {{ $post->id }}) page</h1>
