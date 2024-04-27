<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class SettingValueCast implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param array<string, mixed> $attributes
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        $decoded = json_decode($value, true);

        if ($decoded !== null) {
            return $decoded;
        }

        return $value;
    }

    /**
     * Prepare the given value for storage.
     *
     * @param array<string, mixed> $attributes
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        if (is_array($value) || is_object($value)) {
            $value = json_encode($value);
        }

        return $value;
    }
}
