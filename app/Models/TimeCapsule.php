<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeCapsule extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'open_date',
        'notification_sent',
        'status',
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

