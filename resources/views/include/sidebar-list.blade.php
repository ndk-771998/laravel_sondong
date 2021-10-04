
<div class="title breadcrumb">
    {{ $post_type_label }}
</div>
<div class="list">
    @foreach ($posts_menu as $item)
    <a href="/{{ $item->type}}/{{ $item->slug }}">{{ $item->title }}</a>
    @endforeach
</div>