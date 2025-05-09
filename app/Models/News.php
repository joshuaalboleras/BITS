<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public $incrementing = true;

    protected $primaryKey = 'news_id';

    protected $fillable = [
        "title",
        "description",
        'date'
    ];
    
}
