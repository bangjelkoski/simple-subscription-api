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

    protected $fillable = ['type', 'label', 'placeholder'];

    protected $casts = [
        'parameters' => 'json',
    ];

    public static function getFromCode($code)
    {
        return optional(static::whereCode($code)->first());
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('label')
            ->saveSlugsTo('code');
    }

    public function type()
    {
        return FieldRepository::make($this->type, $this);
    }

    public function validate()
    {
        return Validator::make($this->attributes, [
            'label' => 'required',
            'type'  => ['required', Rule::in(FieldRepository::classes())],
        ])->validate();
    }
}
