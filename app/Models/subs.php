<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subs extends Model
{
    use HasFactory;

    protected $table = 'subs';

    protected $fillable = ['is_sub'];
}
