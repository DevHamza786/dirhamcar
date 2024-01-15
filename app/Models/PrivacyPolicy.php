<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PrivacyPolicy extends Model
{
    use HasFactory;
    
    protected $table = 'privacy_policy'; // Add this line
    protected $fillable = ['content'];  // Specify the fillable columns
}

