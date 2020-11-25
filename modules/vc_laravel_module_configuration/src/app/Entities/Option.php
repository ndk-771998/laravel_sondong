<?php

namespace VCComponent\Laravel\Config\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;


class Option extends Model
{
    use Sluggable, SluggableScopeHelpers;

    protected $fillable = [
        'key',
        'value',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'key',
            ],
        ];
    }

    public static function getOption($key)
    {
        $option = self::where('slug', $key)->first();
        if ($option) {
            return $option->value;
        }
        return '';
    }

    public static function saveOption($request)
    {
        Option::create($request->all());
    }

    public static function getOptions($key)
    {
        $options    = self::whereIn('slug', $key)->get();
        $arrayKey   = [];
        $arrayValue = [];
        if (count($options) > 0) {

            foreach ($options as $Option) {

                $value = $Option->value;
                $key   = $Option->key;

                array_push($arrayValue, $value);
                array_push($arrayKey, $key);
            }
            return array_combine($arrayKey, $arrayValue);
        }

        return '';
    }
}
