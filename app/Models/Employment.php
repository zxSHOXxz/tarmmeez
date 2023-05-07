<?php

namespace App\Models;
use App\Traits\Trans;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employment extends Model
{
     protected $guarded=[];
    use HasFactory , softDeletes , Trans;

      public function jops()
    {
        return $this->belongsTo(Jop::class)->withDefault();
    }
}
