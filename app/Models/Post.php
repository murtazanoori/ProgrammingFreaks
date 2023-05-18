<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function Pcatcon(){

        // stablishing a connection between Posts and SubCategory Database , so that we can display Subcategory
        // inside the Posts View and Create Blade
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
}
