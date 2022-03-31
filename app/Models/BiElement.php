<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiElement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'engine', 'type', 'embed_code', 'preview', 'width', 'height'
    ];
}
