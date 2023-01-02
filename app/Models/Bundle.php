<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Section;
use App\Models\Setting;

class Bundle extends Model
{
    use HasFactory;

    public function sections()
    {
        return $this->belongsToMany('App\Models\Section');
    }

    public function settings()
    {
        return $this->hasOne('App\Models\Setting');
    }
}
