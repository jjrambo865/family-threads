<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keepsake extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'photo',
    ];

    public function memoryItem()
    {
        return $this->belongsTo(MemoryItem::class, 'item_id');
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class, 'assignable_id');
    }
}

