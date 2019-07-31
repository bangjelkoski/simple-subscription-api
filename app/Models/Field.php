<?php

namespace App\Models;

use App\Repositories\FieldRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Field extends Model
{
    use HasSlug;

    protected $fillable = ['type', 'title', 'placeholder'];

    protected $casts = [
        'parameters' => 'json',
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

    public function validate()
    {
        return Validator::make(request()->all(), [
            'title' => 'required',
            'type'  => ['required', Rule::in(FieldRepository::codes())],
        ])->validate();
    }
}
