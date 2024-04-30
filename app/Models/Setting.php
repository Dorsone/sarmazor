<?php

namespace App\Models;

use App\Casts\SettingValueCast;
use App\Enums\SettingKeyEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $label
 * @property SettingKeyEnum $key
 * @property string|int|array $value
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Setting extends Model
{
    use HasFactory;

    protected $casts = [
        'value' => SettingValueCast::class,
        'key' => SettingKeyEnum::class
    ];

    protected $fillable = [
        'label',
        'key',
        'value'
    ];
}
