<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    use HasFactory;
    protected $table = 'expertises';

    protected $fillable = ['title','short_description','discription','image','parent_id','banner'];
    
    public function expertises()
    {
        return $this->hasMany(Expertise::class,'parent_id','id');
    }
}
