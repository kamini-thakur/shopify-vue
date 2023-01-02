<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Bundle;
use App\Models\Product;

class Section extends Model
{
    use HasFactory;

    public function bundles()
    {
        return $this->belongsToMany('App\Models\Bundle');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }
}
