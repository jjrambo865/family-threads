<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyTreeNode extends Model
{
    use HasFactory;

    protected $fillable = [
        'family_id',
        'user_id',
        'parent_node_id',
        'relation_type',
        'position_x',
        'position_y',
    ];

    public function family()
    {
        return $this->belongsTo(Family::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parent()
    {
        return $this->belongsTo(FamilyTreeNode::class, 'parent_node_id');
    }

    public function children()
    {
        return $this->hasMany(FamilyTreeNode::class, 'parent_node_id');
    }
}
