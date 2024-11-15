<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    protected $fillable = [
        'family_name',
        'family_photo',
        'admin_user_id',
        'family_code',
        'layout_settings',
        'is_public',
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_user_id');
    }

    public function memberships()
    {
        return $this->hasMany(FamilyMembership::class);
    }

    public function treeNodes()
    {
        return $this->hasMany(FamilyTreeNode::class);
    }

    public function memoryThreads()
    {
        return $this->hasMany(MemoryThread::class);
    }

}
