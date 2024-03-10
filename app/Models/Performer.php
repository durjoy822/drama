<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performer extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'drama_id', 'position', 'character'];

    public function drama()
    {
        return $this->belongsTo(Drama::class);
    }
}