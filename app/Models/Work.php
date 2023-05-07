<?php

namespace App\Models;

use App\Traits\Trans;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Work extends Model
{
    protected $guarded = [];
    use HasFactory, softDeletes, Trans;

    public function users()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
    public function services()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
