<?php

namespace VCComponent\Laravel\Config\Entities;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'key',
        'value',
    ];

    public static function getOption($key)
    {
        $option = self::where('key', $key)->first();
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
        $options    = self::whereIn('key', $key)->get();
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
