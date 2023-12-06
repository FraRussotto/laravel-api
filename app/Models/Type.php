<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Type extends Model
{
    use HasFactory;

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    protected $fillable = [
        'name',
        'slug'
    ];

    public static function generateSlug($string)
    {
        $slug = Str::slug($string, '-');
        $original_slug = $slug;
        $exists = Type::where('slug', $slug)->first();
        $c = 1;

        while ($exists) {
            $slug = $original_slug . '-' . $c;
            $exists = Type::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }
}
