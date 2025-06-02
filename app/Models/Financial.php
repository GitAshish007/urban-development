<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
    use HasFactory;

    // Define the fields that can be mass-assigned
    protected $fillable = [
        'date',
        'yojna_name',
        'section',
        'GO_number',
        'amount',
        'subject'
    ];
}
