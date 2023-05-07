<?php

namespace App\Models;
use App\Traits\Trans;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
     protected $guarded=[];
    use HasFactory , softDeletes ,Trans ;

      public function users()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
      public function works()
    {
        return $this->belongsTo(Work::class)->withDefault();
    }
}
