<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bi_element extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'engine', 'type', 'embed_code', 'preview', 'width', 'height'
    ];
}
