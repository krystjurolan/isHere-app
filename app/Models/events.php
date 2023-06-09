<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = ['event_name', 'event_date', 'event_time', 'event_desc'];
}
