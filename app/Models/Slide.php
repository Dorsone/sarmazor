<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

/**
 * @class Slide
 *
 * @property int $id
 * @property string $title
 * @property string $subtitle
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Slide extends Model implements HasMedia
{
    use HasFactory;
    use HasTranslations;
    use InteractsWithMedia;
    use AsSource;
    use Filterable;
    use Attachable;

    public array $translatable = [
        'title',
        'subtitle'
    ];

    protected $fillable = [
        'title',
        'subtitle'
    ];
}
