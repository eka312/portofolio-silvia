<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projek extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_projek';
    protected $table = 'projeks';
    protected $guarded = [];
    public $timestamps = false;
}
