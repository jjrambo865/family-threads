<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyTreeEdge extends Model
{
    use HasFactory;

    protected $fillable = [
        'source_node_id',
        'target_node_id',
        'edge_type',
    ];

    public function sourceNode()
    {
        return $this->belongsTo(FamilyTreeNode::class, 'source_node_id');
    }

    public function targetNode()
    {
        return $this->belongsTo(FamilyTreeNode::class, 'target_node_id');
    }
}

