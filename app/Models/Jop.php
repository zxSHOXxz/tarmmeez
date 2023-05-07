<?php

namespace App\Models;
use App\Traits\Trans;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jop extends Model
{
     protected $guarded=[];
    use HasFactory , softDeletes , Trans;

      public function users()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
    public function employments()
    {
        return $this->hasMany(Employment::class);
    }
}
