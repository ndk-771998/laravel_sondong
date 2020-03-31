<?php

namespace VCComponent\Laravel\Product\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use VCComponent\Laravel\Vicoders\Core\Exceptions\NotFoundException;
use VCComponent\Laravel\Vicoders\Core\Exceptions\PermissionDeniedException;

trait Helpers
{

    private function filterProductRequestData(Request $request, $entity)
    {
        $request_data = collect($request->all());
        if ($request->has('status')) {
            $request_data->pull('status');
        }
        $schema = collect($entity->schema());

        $request_data_keys = $request_data->keys();
        $schema_keys       = $schema->keys()->toArray();

        $default_keys = $request_data_keys->diff($schema_keys)->all();

        $data            = [];
        $data['default'] = $request_data->filter(function ($value, $key) use ($default_keys) {
            return in_array($key, $default_keys);
        })->toArray();

        if ($request['name']) {
            $data['default']['slug'] = Str::slug($request['name']);
        }

        $data['schema'] = $request_data->filter(function ($value, $key) use ($schema_keys) {
            return in_array($key, $schema_keys);
        })->toArray();

        return $data;
    }

}
