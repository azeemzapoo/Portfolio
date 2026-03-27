<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class project extends Model
{
    //

    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image_path',
        'project_url',
        'github_url',
        'tech_stack',
        'featured',
        'sort_order',
    ];

    protected $casts = [
        'tech_stack' => 'array',
        'featured' => 'boolean',
    ];


}
