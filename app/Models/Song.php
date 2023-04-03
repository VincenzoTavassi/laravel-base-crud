<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ["title", "album", "author", "length", "poster", "description", "editor"];
    use HasFactory;
    public function getMinutes()
    {
        return number_format($this->length / 60, 2, '.', ',');
    }
}
