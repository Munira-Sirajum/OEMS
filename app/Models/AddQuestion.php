<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Option;
class AddQuestion extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "addquestions";

    public function eexam(){
        return $this->hasMany(Eexam::class, 'eexam_id', 'id');
    }


    public function options(){
        return $this->hasOne(Option::class,'addquestion_id','id');
    }
}
