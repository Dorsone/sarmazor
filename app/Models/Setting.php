<?php

namespace App\Models;

use App\Casts\SettingValueCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $label
 * @property string $key
 * @property string|int|array $value
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Setting extends Model
{
    use HasFactory;

    protected $casts = [
        'value' => SettingValueCast::class
    ];

    protected $fillable = [
        'label',
        'key',
        'value'
    ];
}
