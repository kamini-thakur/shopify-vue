<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['product_image','header_image','add_note_field','show_bundle_desc','show_product_desc'];

    public function bundles() {
        return $this->belongsTo('App\Models\Bundle');
    }
}
