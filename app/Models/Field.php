<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Field extends Model
{
    use HasSlug;

    protected $fillable = ['type', 'title', 'placeholder'];

    public static function getFromCode($code)
    {
        return static::whereCode($code)->first();
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('code');
    }

    public function type()
    {
        return FieldRepository::make($this->type, $this);
    }
}
