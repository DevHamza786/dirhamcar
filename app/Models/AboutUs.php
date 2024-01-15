<?php
// app/Models/AboutUs.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = ['meta_title', 'meta_description', 'content', 'image_path', 'content_one', 'content_two', 'content_three', 'content_four', 'content_five',];
}
