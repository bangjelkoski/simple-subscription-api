<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Field extends Model
{
    use HasSlug;

    protected $fillable = ['type', 'title', 'placeholder'];

    protected $casts = [
        'parameters' => 'array',
    ];

    public static function getFromCode($code)
    {
        return static::whereCode($code)->first();
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('code');
    }

    public function type()
    {
        return FieldRepository::make($this->type, $this);
    }

    public function setParametersAttribute($parameters)
    {
        $this->attributes['parameters'] = json_encode($parameters);
    }
}
