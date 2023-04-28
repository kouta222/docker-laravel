<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany('App\models\Products');
    }
    public function major_category()
    {
        return $this->belongsTo('App\Models\MajorCategory');
    }
}
