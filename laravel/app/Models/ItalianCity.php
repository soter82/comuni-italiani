<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItalianCity extends Model
{
    use HasFactory;

    protected $table = 'italian_cities';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $guarded = [];
}
