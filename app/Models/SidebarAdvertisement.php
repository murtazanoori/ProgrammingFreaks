<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SidebarAdvertisement extends Model
{
    use HasFactory;
    protected $fillable =[
        'Top_sidebar_ad',
        'Top_sidebar_url',
        'Top_sidebar_status',
        'Bottom_sidebar_ad',
        'Bottom_sidebar_url',
        'Bottom_sidebar_status',


    ];
}
