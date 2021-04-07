<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eexam extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function professor()
    {
        return $this->belongsTo(Professor::class,'professor_id','id');
    }
}
