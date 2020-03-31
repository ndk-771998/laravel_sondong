<?php

namespace VCComponent\Laravel\Tag\Traits;

use VCComponent\Laravel\Tag\Entities\Tag;

trait HasTagsTraits
{
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    protected function ofTag($id)
    {
        return Tag::with('posts')->where('id', $id);
    }
    protected function oftags($ids)
    {
        return Tag::with('posts')->whereIn('id', [$ids]);
    }

    public function attachTag($tag_id)
    {
        $this->tag()->attach($tag_id);
    }
    public function attachTags($tag_ids)
    {
        $this->tag()->attach($tag_ids);
    }

    public function detachTag($tag_id)
    {
        $this->tag()->detach($tag_id);
    }

    public function syncTag($tag_id)
    {
        $this->tag()->sync($tag_id);
    }
}
