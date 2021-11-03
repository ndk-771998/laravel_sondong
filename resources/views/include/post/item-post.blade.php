<div class="item-post">
    <div class="thumbnail">
        <a href="/{{ $post->type }}/{{ $post->slug }}">
            <img src="{{ $post->thumbnail }}" alt="{{ $post->title }}">
        </a>
    </div>
    <a href="/{{ $post->type }}/{{ $post->slug }}">
        <div class="title">{{ $post->title }}</div>
    </a>
    <div class="publish-date">{{ $post->getPublishedDate() }}</div>
    <a href="/{{ $post->type }}/{{ $post->slug }}">
        <div class="description">{{ $post->description }}</div>
    </a>
</div>