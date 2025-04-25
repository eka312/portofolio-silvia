<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class projek extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_projek';
    protected $table = 'projeks';
    protected $guarded = [];
    public $timestamps = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($projek) {
            $projek->slug = Str::slug($projek->judul);
        });

        static::updating(function ($projek) {
            $projek->slug = Str::slug($projek->judul);
        });
    }
}
